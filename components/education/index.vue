<template>
  <div class="a-card p-16">
    <div class="content_group">
      <h2 class="h2-text">Education</h2>
      <LazyExperienceGroup :items="educations" />
    </div>
  </div>
</template>

<script>
export default {
  name: 'Education',
  data() {
    return {
      educations: [
        {
          id: 1,
          logo: require('~/assets/img/company/binus.png'),
          company: 'Bina Nusantara University',
          type: 'Undergraduated Degree',
          occupation: 'Bachelor of Computer Science',
          start_date: 'September 2012',
          end_date: 'August 2018',
          website: '',
          task_1: 'Learn C/C++',
          task_2: 'Learn Java Programming',
          task_3: 'Learn Database',
          task_4: 'Learn AI',
          task_5: 'Learn Networking',
          task_6: 'Learn Web Development',
          task_7: '',
          task_8: '',
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
