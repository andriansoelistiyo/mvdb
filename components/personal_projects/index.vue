<template>
  <div class="a-card p-16">
    <div class="content_group">
      <h2 class="h2-text">Personal projects</h2>
      <LazyExperienceGroup :items="projects" />
    </div>
  </div>
</template>

<script>
export default {
  name: 'PersonalProjects',
  data() {
    return {
      projects: [
        {
          id: 1,
          logo: require('~/assets/img/company/medium.jpeg'),
          company: 'Living App: Finding ideal living space',
          type: 'Case Study',
          occupation: 'UI/UX Designer',
          start_date: '5 Days',
          end_date: 'April 2021',
          website:
            'https://andriansoelistiyo.medium.com/finding-ideal-living-space-case-study-87cf2235f5d5',
          task_1: 'User Research',
          task_2: 'Affinity Mapping',
          task_3: 'Create Information Architecture',
          task_4: 'Create User Flow',
          task_5: 'Create Wireframe',
          task_6: 'Create Lo-Fi & Hi-Fi Design',
          task_7: 'Create Prototype',
          task_8: 'Usability Testing',
          task_9: '',
          task_10: '',
          task_11: '',
          task_12: '',
          task_13: '',
          task_14: '',
        },
      ],
    }
  },
}
</script>
