<script setup>
import { Head } from '@inertiajs/vue3'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import * as TeamMemberCards from '@/Components/Card/Team'
import Section from '@/Layouts/Section.vue'

const teamMembers = [
    {
        name: 'Diane',
        position: 'Director',
        description:
            "Diane, our founder, embarked on her picture framing journey in 1993. In 1997, she realized her dream by opening her framing business on Oxley Drive. With her vision and dedication, the business thrived and has continued to this day. With over 30 years of experience in the industry, Diane's passion for framing continues to drive our business forward.",
        src: 'team/diane.webp',
        alt: 'Diane',
        side: false,
        component: 'RightTeamMember',
    },
    {
        name: 'Karen',
        position: 'Senior Framer',
        description:
            'With over three decades of framing experience, Karen has been an integral part of our team. Her exceptional artistic flair enables her to assist our customers in making challenging choices, delivering outstanding results.',
        //src: 'team/dianne-temp.jpeg',
        alt: 'Karen',
        side: false,
        component: 'LeftTeamMember',
    },
    {
        name: 'John',
        position: 'Framer',
        description:
            'John has been a valuable addition to our team and making significant contributions. With approximately six years of prior experience running his own picture framing business and a background in engineering, he brings a wealth of expertise.',
        //src: 'team/dianne-temp.jpeg',
        alt: 'John',
        side: false,
        component: 'RightTeamMember',
    },
    {
        name: 'Bethany',
        position: 'Framer',
        description:
            'Bethany, our newest team member, successfully juggles her university studies with her passion for picture framing. Her enthusiasm shines through as she continues to make impressive strides in her framing skills, consistently delivering outstanding work.',
        src: 'team/bethany.webp',
        alt: 'Bethany',
        side: false,
        component: 'LeftTeamMember',
    },
    // {
    //     name: 'Seth',
    //     position: 'Computer Guy',
    //     description:
    //         "Seth hasn't done too much framing but definitely helps out around the store when he isn't doing computer work.",
    //     image: 'team/seth.webp',
    //     alt: 'Seth',
    //     side: false,
    //     component: 'RightTeamMember',
    // },
]
</script>

<template>
    <Head title="About" />

    <PrimaryLayout>
        <div id="intro">
            <Section>
                <template #header> About us</template>
                <template #title> How did it all start?</template>
                <template #content>
                    Framed Just For You was established in 1997 on Oxley Drive. In 2000, the store
                    was relocated to 142 Brisbane Road, where it served the community for the
                    subsequent two decades. A significant move took place in August 2019, bringing
                    the business to its current location at 122 Brisbane Road. With nearly 60 years
                    of collective experience in the picture framing industry, the journey continues.
                </template>
            </Section>
        </div>
        <div id="team-member">
            <Section>
                <template #header> Meet the Team</template>
                <template #subtitle> ...with over 60 years of experience</template>
                <template #content>
                    <component
                        v-for="teamMember in teamMembers"
                        v-bind="teamMember"
                        :is="TeamMemberCards[teamMember.component]"
                    />
                </template>
            </Section>
        </div>
    </PrimaryLayout>
</template>
