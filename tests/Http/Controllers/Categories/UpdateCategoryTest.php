<?php

namespace Tests\Http\Controllers\Categories;

use App\Domain\Workspace\Models\Workspace;
use Tests\TestCase;
use App\Domain\Iam\Models\User;
use App\Domain\Files\Models\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Domain\Categories\Models\Category;

class UpdateCategoryTest extends TestCase
{
    protected Category $category;

    protected function setUp(): void
    {
        parent::setUp();

        $this->category = Category::factory()->create();
    }

    /** @test */
    public function must_be_authenticated()
    {
        $this->post(route('categories.update', $this->category))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function must_be_admin_or_manager()
    {
        $this->actingAs(User::factory()->create())
            ->postJson(route('categories.update', $this->category), [])
            ->assertForbidden();
    }

    /** @test */
    public function name_is_required()
    {
        $this->actingAs(User::factory()->admin()->create())
            ->postJson(route('categories.update', $this->category), [
                'name' => null
            ])
            ->assertJsonValidationErrors([
                'name' => 'The name field is required.'
            ]);
    }

    /** @test */
    public function file_must_be_image()
    {
        $this->actingAs(User::factory()->admin()->create())
            ->postJson(route('categories.update', $this->category), [
                'name' => 'Some category',
                'description' => 'Some description',
                'file' => 12345
            ])
            ->assertJsonValidationErrors([
                'file' => 'The file field must be an image.'
            ]);
    }

    /** @test */
    public function can_update_category()
    {
        Storage::fake();

        $file = UploadedFile::fake()->image('file.jpg');

        $this->actingAs(User::factory()->admin()->create())
            ->postJson(route('categories.update', $this->category), [
                'name' => 'Some category',
                'description' => 'Some description',
                'file' => $file
            ])
            ->assertRedirect()
            ->assertSessionHas('success', 'Successfully updated category!');

        Storage::assertExists($file->hashName('categories'));
    }
}
