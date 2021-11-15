<template>
  <div class="pill_group">
    <div v-for="item in items" :key="item.id" class="a-pill">
      {{ item.value }}
    </div>
  </div>
</template>

<script>
export default {
  name: 'PillGroup',
  props: {
    items: {
      type: Array,
      required: true,
    },
  },
}
</script>

<style scoped>
/* mobile screen */
@media screen and (max-width: 576px) {
  .a-pill {
    font-size: var(--body02);
    line-height: var(--lhBody02);
    margin-right: 8px;
    margin-bottom: 12px;
  }
}

/* horizontal mobile screen */
@media screen and (min-width: 577px) and (max-width: 768px) {
  .a-pill {
    font-size: var(--body02);
    line-height: var(--lhBody02);
    margin-right: 8px;
    margin-bottom: 12px;
  }
}

/* ipad screen */
@media screen and (min-width: 767px) and (max-width: 992px) {
  .a-pill {
    font-size: var(--body02);
    line-height: var(--lhBody02);
    margin-right: 8px;
    margin-bottom: 12px;
  }
}

/* ipad pro screen */
@media screen and (min-width: 993px) and (max-width: 1200px) {
  .a-pill {
    font-size: var(--body02);
    line-height: var(--lhBody02);
    margin-right: 8px;
    margin-bottom: 12px;
  }
}

/* desktop screen */
@media screen and (min-width: 1201px) {
  .a-pill {
    font-size: var(--body02);
    line-height: var(--lhBody02);
    margin-right: 8px;
    margin-bottom: 12px;
  }
}
.a-pill {
  padding: 4px 12px;
  font-family: roboto400;
  background-color: var(--black06);
  color: var(--black02);
  border-radius: var(--bigRadius);
  display: inline-block;
  white-space: nowrap;
}
</style>
