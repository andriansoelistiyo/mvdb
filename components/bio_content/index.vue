<template>
  <div class="bio_content">
    <div v-for="item in items" :key="item.id" class="row">
      <div class="col-12 col-md-8 col-lg-8 col-xl-8">
        <div class="d-flex pr-16">
          <div class="flex-shrink-0 mr-32 d-block d-sm-none">
            <img
              class="profile-image img-fluid"
              :src="item.profile_image"
              width="96"
              height="96"
              :alt="item.name"
            />
          </div>
          <div class="flex-shrink-0 mr-32 d-none d-sm-block">
            <img
              class="profile-image img-fluid"
              :src="item.profile_image"
              width="176"
              height="176"
              :alt="item.name"
            />
          </div>
          <div class="flex-grow-1">
            <div class="content_group">
              <h1 class="h1-text">{{ item.name }}</h1>
              <div class="body-text">{{ item.occupation }}</div>
              <div class="body-text">{{ item.city }}</div>
            </div>
            <div
              v-if="$device.isDesktop"
              class="content_group mt-16 d-none d-sm-block"
            >
              <h2 class="h2-text">About me</h2>
              <p class="body-text">
                {{ item.about }}
              </p>
            </div>
            <div
              v-if="$device.isDesktop"
              class="content_group mt-16 d-none d-sm-block"
            >
              <a
                :href="
                  'https://wa.me/62' +
                  `${item.whatsapp}` +
                  '?text=Hello, I have visited your website and I want to know more about you. Do you have a free time today?'
                "
                target="_blank"
              >
                <div class="pill-open">
                  <div class="d-flex">
                    <div class="flex-shrink-0 mr-16">
                      <div class="icon-container">
                        <i class="far fa-handshake color-primary"></i>
                      </div>
                    </div>
                    <div class="flex-grow-0 mr-16">
                      <div class="pill-text-open">
                        I am available for a new project
                      </div>
                      <div class="pill-text-open fw-bold">CONTACT ME!</div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-4 col-xl-4">
        <div class="content_group mt-16 mb-16 d-block d-sm-none">
          <h2 class="h2-text">About me</h2>
          <p class="body-text">
            {{ item.about }}
          </p>
        </div>
        <div class="content_group pl-16">
          <h2 class="h2-text">Contacts</h2>
          <div class="d-flex mb-8">
            <div class="flex-shrink-0 mr-16">
              <div class="icon-container">
                <i class="fab fa-whatsapp"></i>
              </div>
            </div>
            <div class="flex-grow-1">
              <div class="body-text">Whatsapp</div>
              <div class="body-text">
                <a
                  :href="
                    'https://wa.me/62' +
                    `${item.whatsapp}` +
                    '?text=Hello, I have visited your website and I want to know more about you. Do you have a free time today?'
                  "
                  target="_blank"
                  >+62 {{ item.whatsapp }}</a
                >
              </div>
            </div>
          </div>
          <div class="d-flex mb-8">
            <div class="flex-shrink-0 mr-16">
              <div class="icon-container">
                <i class="fas fa-envelope"></i>
              </div>
            </div>
            <div class="flex-grow-1">
              <div class="body-text">E-mail</div>
              <div class="body-text">
                <a
                  :href="
                    'https://mail.google.com/mail/?view=cm&fs=1&to=' +
                    `${item.email}`
                  "
                  target="_blank"
                  >{{ item.email }}</a
                >
              </div>
            </div>
          </div>
          <div class="d-flex mb-8">
            <div class="flex-shrink-0 mr-16">
              <div class="icon-container">
                <i class="fab fa-linkedin-in"></i>
              </div>
            </div>
            <div class="flex-grow-1">
              <div class="body-text">Linkedin</div>
              <div class="body-text">
                <a :href="item.linkedin_link" target="_blank">{{
                  item.linkedin
                }}</a>
              </div>
            </div>
          </div>
          <div class="d-flex mb-8">
            <div class="flex-shrink-0 mr-16">
              <div class="icon-container">
                <i class="fab fa-instagram"></i>
              </div>
            </div>
            <div class="flex-grow-1">
              <div class="body-text">Instagram</div>
              <div class="body-text">
                <a :href="item.instagram_link" target="_blank">{{
                  item.instagram
                }}</a>
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="flex-shrink-0 mr-16">
              <div class="icon-container">
                <i class="fab fa-twitter"></i>
              </div>
            </div>
            <div class="flex-grow-1">
              <div class="body-text">Twitter</div>
              <div class="body-text">
                <a :href="item.twitter_link" target="_blank">{{
                  item.twitter
                }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'BioContent',
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
  .profile-image {
    max-width: 96px;
    max-height: 96px;
    border-radius: 100%;
  }
  .mr-32 {
    margin-right: 16px;
  }
  .pl-16 {
    padding-left: 0;
  }
}

/* horizontal mobile screen */
@media screen and (min-width: 577px) and (max-width: 768px) {
  .profile-image {
    max-width: 96px;
    max-height: 96px;
    border-radius: 100%;
  }
  .mr-32 {
    margin-right: 16px;
  }
  .pl-16 {
    padding-left: 0;
  }
}
/* ipad screen */
@media screen and (min-width: 767px) and (max-width: 992px) {
  .profile-image {
    max-width: 176px;
    max-height: 176px;
    border-radius: 100%;
  }
}

/* ipad pro screen */
@media screen and (min-width: 993px) and (max-width: 1200px) {
  .profile-image {
    max-width: 176px;
    max-height: 176px;
    border-radius: 100%;
  }
}

/* desktop screen */
@media screen and (min-width: 1201px) {
  .profile-image {
    max-width: 176px;
    max-height: 176px;
    border-radius: 100%;
  }
}
.pill-open {
  padding: 8px;
  background-color: var(--blue03);
  border-radius: var(--bigRadius);
  display: inline-block;
  -webkit-transition: -webkit-background-color 0.3s;
  transition: -webkit-background-color 0.3s;
  transition: background-color 0.3s;
}
.pill-open:hover {
  background-color: var(--blue02);
}
.pill-text-open {
  font-size: var(--body02);
  line-height: var(--lhBody02);
  font-family: roboto500;
  color: var(--white);
}
</style>
