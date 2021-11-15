<template>
  <div class="a-card p-16">
    <div class="content_group">
      <h2 class="h2-text">Skills</h2>
      <LazyPillGroup :items="skills" class="mt-16" />
    </div>
    <hr />
    <div class="content_group mt-16">
      <h2 class="h2-text">Tools</h2>
      <LazyPillGroup :items="tools" class="mt-16" />
    </div>
    <hr />
    <div class="content_group mt-16">
      <h2 class="h2-text">Portofolio and case study</h2>
      <LazyIconLinkGroup :items="portofolios" class="mt-16" />
    </div>
  </div>
</template>

<script>
export default {
  name: 'RightContent',
  data() {
    return {
      skills: [
        {
          id: 1,
          value: 'User Research',
        },
        {
          id: 2,
          value: 'Affinity Map',
        },
        {
          id: 3,
          value: 'Information Architecture',
        },
        {
          id: 4,
          value: 'User Flow',
        },
        {
          id: 5,
          value: 'Wireflow',
        },
        {
          id: 6,
          value: 'Wireframe',
        },
        {
          id: 7,
          value: 'Lo-Fi Design',
        },
        {
          id: 8,
          value: 'Hi-Fi Design',
        },
        {
          id: 9,
          value: 'Prototyping',
        },
        {
          id: 10,
          value: 'Auto layout',
        },
        {
          id: 11,
          value: 'Usability Testing',
        },
        {
          id: 12,
          value: 'A/B Testing',
        },
        {
          id: 13,
          value: 'HTML',
        },
        {
          id: 14,
          value: 'CSS',
        },
        {
          id: 15,
          value: 'JavaScript',
        },
        {
          id: 16,
          value: 'Vue JS',
        },
        {
          id: 17,
          value: 'Nuxt JS',
        },
      ],
      tools: [
        {
          id: 1,
          value: 'Figma',
        },
        {
          id: 2,
          value: 'Adobe XD',
        },
        {
          id: 3,
          value: 'Overflow',
        },
        {
          id: 4,
          value: 'Draw.io',
        },
        {
          id: 5,
          value: 'Mural',
        },
        {
          id: 6,
          value: 'Miro',
        },
        {
          id: 7,
          value: 'Maze',
        },
        {
          id: 8,
          value: 'Lookback',
        },
        {
          id: 9,
          value: 'Visual Studio Code',
        },
        {
          id: 10,
          value: 'Github',
        },
        {
          id: 11,
          value: 'Gitlab',
        },
        {
          id: 12,
          value: 'Google Analytics',
        },
        {
          id: 13,
          value: 'Google Optimize',
        },
        {
          id: 14,
          value: 'Google Data Studio',
        },
        {
          id: 15,
          value: 'Jira',
        },
        {
          id: 16,
          value: 'Trello',
        },
        {
          id: 17,
          value: 'Notion',
        },
      ],
      portofolios: [
        {
          id: 1,
          icon: 'fab fa-medium-m',
          label: 'Medium',
          link: 'https://andriansoelistiyo.medium.com/',
          value: 'andriansoelistiyo.medium.com/',
        },
        {
          id: 2,
          icon: 'fab fa-behance',
          label: 'Behance',
          link: 'https://behance.net/andriansoelist/',
          value: 'behance.net/andriansoelist/',
        },
        {
          id: 3,
          icon: 'fab fa-dribbble',
          label: 'Dribbble',
          link: 'https://dribbble.com/andriansoelistiyo/',
          value: 'dribbble.com/andriansoelistiyo/',
        },
        {
          id: 4,
          icon: 'fab fa-github',
          label: 'GitHub',
          link: 'https://github.com/andriansoelistiyo/',
          value: 'github.com/andriansoelistiyo/',
        },
      ],
    }
  },
}
</script>
