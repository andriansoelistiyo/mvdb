<template>
  <div class="cta_contact_mobile d-block d-sm-none">
    <a
      :href="'https://wa.me/6287788087738?text=Hello, I have visited your website and I want to know more about you. Do you have a free time today?'"
      target="_blank"
    >
      <div class="pill-open">
        <div class="d-flex">
          <div class="flex-shrink-0 mr-16">
            <div class="icon-container">
              <i class="far fa-handshake color-primary"></i>
            </div>
          </div>
          <div class="flex-grow-0 mr-32">
            <div class="pill-text-open">I am available for a new project</div>
            <div class="pill-text-open fw-bold">CONTACT ME!</div>
          </div>
        </div>
      </div>
    </a>
  </div>
</template>

<script>
export default {
  name: 'CtaContactMobile',
}
</script>

<style scoped>
.cta_contact_mobile {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 15px;
}
.pill-open {
  padding: 8px;
  background-color: var(--blue03);
  border-radius: var(--bigRadius);
  position: relative;
}
.pill-text-open {
  font-size: var(--body02);
  line-height: var(--lhBody02);
  font-family: roboto500;
  color: var(--white);
}
</style>
