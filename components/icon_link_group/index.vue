<template>
  <div class="icon_link_group">
    <div v-for="item in items" :key="item.id" class="d-flex mb-8">
      <div class="flex-shrink-0 mr-16">
        <div class="icon-container">
          <i :class="item.icon"></i>
        </div>
      </div>
      <div class="flex-grow-1">
        <div class="body-text">{{ item.label }}</div>
        <div class="body-text">
          <a :href="item.link" target="_blank">{{ item.value }}</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'IconLinkGroup',
  props: {
    items: {
      type: Array,
      required: true,
    },
  },
}
</script>
