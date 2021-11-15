<template>
  <div class="container">
    <div class="py-32">
      <LazyBio />
      <div class="row">
        <div class="col-12 col-md-12 col-lg-8 col-xl-8">
          <LazyWorkExperiences class="mt-32" />
          <LazyPersonalProjects class="mt-32" />
          <LazyEducation class="mt-32" />
        </div>
        <div class="col-12 col-md-12 col-lg-4 col-xl-4">
          <LazyRightContent class="mt-32" />
        </div>
      </div>
      <div class="body-text text-center mt-32">
        Copyright © {{ new Date().getFullYear() }}, designed by
        <a href="https://andriansoelistiyo.netlify.app/" target="_blank"
          >Andrian Soelistiyo</a
        >
      </div>
    </div>
    <CtaContactMobile />
  </div>
</template>

<script>
import ogImage from '@/assets/img/profile2.jpeg'
export default {
  layout: (ctx) => (ctx.$device.isMobile ? 'mobile' : 'default'),
  head() {
    return {
      title: 'Andrian Soelistiyo - My personal website',
      meta: [
        {
          name: 'keywords',
          content:
            'ui/ux designer, product designer, front end developer, work experiences, projects, portofolio, case study',
        },
        // hid is used as unique identifier. Do not use `vmid` for it as it will not work
        {
          hid: 'description',
          name: 'description',
          content:
            'I love help people with technology. That’s why I learn UI/UX Designer, build a product to solve their problem and make an impact for a better life.',
        },
        {
          name: 'fb:app_id',
          property: 'fb:app_id',
          content: '100001006063938',
        },
        {
          name: 'og:image',
          property: 'og:image',
          content: 'https://andriansoelistiyo.netlify.app' + ogImage,
        },
        {
          name: 'og:title',
          property: 'og:title',
          content: 'Andrian Soelistiyo - My personal website',
        },
        {
          name: 'og:site_name',
          property: 'og:site_name',
          content: 'Andrian Soelistiyo - My personal website',
        },
        {
          name: 'og:url',
          property: 'og:url',
          content: 'https://andriansoelistiyo.netlify.app/',
        },
        {
          name: 'og:description',
          property: 'og:description',
          content:
            'I love help people with technology. That’s why I learn UI/UX Designer, build a product to solve their problem and make an impact for a better life.',
        },
        { name: 'og:locale', property: 'og:locale', content: 'id_ID' },
        {
          name: 'og:image:secure_url',
          property: 'og:image:secure_url',
          content: 'https://andriansoelistiyo.netlify.app' + ogImage,
        },
        { name: 'og:type', property: 'og:type', content: 'article' },
        { name: 'twitter:card', content: 'summary_large_image' },
        {
          name: 'twitter:title',
          content: 'Andrian Soelistiyo - My personal website',
        },
        { name: 'twitter:site', content: '@andriantweets' },
        {
          name: 'twitter:url',
          content: 'https://andriansoelistiyo.netlify.app/',
        },
        {
          name: 'twitter:description',
          content:
            'I love help people with technology. That’s why I learn UI/UX Designer, build a product to solve their problem and make an impact for a better life.',
        },
        {
          name: 'twitter:image',
          content: 'https://andriansoelistiyo.netlify.app' + ogImage,
        },
      ],
      link: [
        {
          rel: 'canonical',
          href: 'https://andriansoelistiyo.netlify.app/',
        },
      ],
    }
  },
}
</script>
