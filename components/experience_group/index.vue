<template>
  <div class="experience_group mt-16">
    <div v-for="item in items" :key="item.id" class="a-experience">
      <div class="d-flex">
        <div class="flex-shrink-0 mr-32 d-block d-sm-none">
          <img
            class="company-logo img-fluid rounded"
            width="40"
            height="40"
            :src="item.logo"
            :alt="item.company"
          />
        </div>
        <div class="flex-shrink-0 mr-32 d-none d-sm-block">
          <img
            class="company-logo img-fluid rounded"
            width="48"
            height="48"
            :src="item.logo"
            :alt="item.company"
          />
        </div>
        <div class="flex-grow-1">
          <div class="head-content">
            <div v-if="item.website == ''" class="body-text mb-1">
              <span class="fw-bold">{{ item.company }}</span>
              • {{ item.type }}
            </div>
            <div v-else class="body-text mb-1">
              <span class="fw-bold">{{ item.company }}</span>
              • {{ item.type }} •
              <a :href="item.website" target="_blank"
                >See Project <i class="fas fa-external-link-alt"></i
              ></a>
            </div>
            <div class="body-text mb-1">
              {{ item.occupation }}
            </div>
            <div class="body-text">
              {{ item.start_date }} - {{ item.end_date }}
            </div>
          </div>
          <div class="mt-16 d-block d-sm-none">
            <ul class="body-text">
              <li v-if="item.task_1 !== null && item.task_1 !== ''">
                {{ item.task_1 }}
              </li>
              <li v-if="item.task_2 !== null && item.task_2 !== ''">
                {{ item.task_2 }}
              </li>
              <li v-if="item.task_3 !== null && item.task_3 !== ''">
                {{ item.task_3 }}
              </li>
              <li v-if="item.task_4 !== null && item.task_4 !== ''">
                {{ item.task_4 }}
              </li>
              <li v-if="item.task_5 !== null && item.task_5 !== ''">
                {{ item.task_5 }}
              </li>
              <li v-if="item.task_6 !== null && item.task_6 !== ''">
                {{ item.task_6 }}
              </li>
              <li v-if="item.task_7 !== null && item.task_7 !== ''">
                {{ item.task_7 }}
              </li>
              <li v-if="item.task_8 !== null && item.task_8 !== ''">
                {{ item.task_8 }}
              </li>
              <li v-if="item.task_9 !== null && item.task_9 !== ''">
                {{ item.task_9 }}
              </li>
              <li v-if="item.task_10 !== null && item.task_10 !== ''">
                {{ item.task_10 }}
              </li>
              <li v-if="item.task_11 !== null && item.task_11 !== ''">
                {{ item.task_11 }}
              </li>
              <li v-if="item.task_12 !== null && item.task_12 !== ''">
                {{ item.task_12 }}
              </li>
              <li v-if="item.task_13 !== null && item.task_13 !== ''">
                {{ item.task_13 }}
              </li>
              <li v-if="item.task_14 !== null && item.task_14 !== ''">
                {{ item.task_14 }}
              </li>
            </ul>
          </div>
          <div class="mt-16 d-none d-sm-block">
            <div
              v-if="item.task_1 !== null && item.task_1 !== ''"
              class="row divider-row"
            >
              <div class="col-6">
                <ul class="body-text">
                  <li v-if="item.task_1 !== null && item.task_1 !== ''">
                    {{ item.task_1 }}
                  </li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="body-text">
                  <li v-if="item.task_2 !== null && item.task_2 !== ''">
                    {{ item.task_2 }}
                  </li>
                </ul>
              </div>
            </div>
            <div
              v-if="item.task_3 !== null && item.task_3 !== ''"
              class="row divider-row"
            >
              <div class="col-6">
                <ul class="body-text">
                  <li
                    v-if="item.task_3 !== null && item.task_3 !== ''"
                    class="mt-8"
                  >
                    {{ item.task_3 }}
                  </li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="body-text">
                  <li
                    v-if="item.task_4 !== null && item.task_4 !== ''"
                    class="mt-8"
                  >
                    {{ item.task_4 }}
                  </li>
                </ul>
              </div>
            </div>
            <div
              v-if="item.task_5 !== null && item.task_5 !== ''"
              class="row divider-row"
            >
              <div class="col-6">
                <ul class="body-text">
                  <li
                    v-if="item.task_5 !== null && item.task_5 !== ''"
                    class="mt-8"
                  >
                    {{ item.task_5 }}
                  </li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="body-text">
                  <li
                    v-if="item.task_6 !== null && item.task_6 !== ''"
                    class="mt-8"
                  >
                    {{ item.task_6 }}
                  </li>
                </ul>
              </div>
            </div>
            <div
              v-if="item.task_7 !== null && item.task_7 !== ''"
              class="row divider-row"
            >
              <div class="col-6">
                <ul class="body-text">
                  <li
                    v-if="item.task_7 !== null && item.task_7 !== ''"
                    class="mt-8"
                  >
                    {{ item.task_7 }}
                  </li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="body-text">
                  <li
                    v-if="item.task_8 !== null && item.task_8 !== ''"
                    class="mt-8"
                  >
                    {{ item.task_8 }}
                  </li>
                </ul>
              </div>
            </div>
            <div
              v-if="item.task_9 !== null && item.task_9 !== ''"
              class="row divider-row"
            >
              <div class="col-6">
                <ul class="body-text">
                  <li
                    v-if="item.task_9 !== null && item.task_9 !== ''"
                    class="mt-8"
                  >
                    {{ item.task_9 }}
                  </li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="body-text">
                  <li
                    v-if="item.task_10 !== null && item.task_10 !== ''"
                    class="mt-8"
                  >
                    {{ item.task_10 }}
                  </li>
                </ul>
              </div>
            </div>
            <div
              v-if="item.task_11 !== null && item.task_11 !== ''"
              class="row divider-row"
            >
              <div class="col-6">
                <ul class="body-text">
                  <li
                    v-if="item.task_11 !== null && item.task_11 !== ''"
                    class="mt-8"
                  >
                    {{ item.task_11 }}
                  </li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="body-text">
                  <li
                    v-if="item.task_12 !== null && item.task_12 !== ''"
                    class="mt-8"
                  >
                    {{ item.task_12 }}
                  </li>
                </ul>
              </div>
            </div>
            <div
              v-if="item.task_13 !== null && item.task_13 !== ''"
              class="row divider-row"
            >
              <div class="col-6">
                <ul class="body-text">
                  <li
                    v-if="item.task_13 !== null && item.task_13 !== ''"
                    class="mt-8"
                  >
                    {{ item.task_13 }}
                  </li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="body-text">
                  <li
                    v-if="item.task_14 !== null && item.task_14 !== ''"
                    class="mt-8"
                  >
                    {{ item.task_14 }}
                  </li>
                </ul>
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
  name: 'ExperienceGroup',
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
  .mr-32 {
    margin-right: 16px;
  }
  .company-logo {
    width: 40px;
    height: 40px;
  }
  .a-experience:first-child {
    margin-bottom: 16px;
  }
  .a-experience {
    margin-bottom: 16px;
  }
  .a-experience:last-child {
    margin-bottom: 0;
  }
  .body-text > li:first-child {
    margin-bottom: 8px;
  }
  .body-text > li {
    margin-bottom: 8px;
  }
  .body-text > li:last-child {
    margin-bottom: 0;
  }
}

/* horizontal mobile screen */
@media screen and (min-width: 577px) and (max-width: 768px) {
  .mr-32 {
    margin-right: 16px;
  }
  .company-logo {
    width: 40px;
    height: 40px;
  }
  .a-experience:first-child {
    margin-bottom: 16px;
  }
  .a-experience {
    margin-bottom: 16px;
  }
  .a-experience:last-child {
    margin-bottom: 0;
  }
  .body-text > li:first-child {
    margin-bottom: 8px;
  }
  .body-text > li {
    margin-bottom: 8px;
  }
  .body-text > li:last-child {
    margin-bottom: 0;
  }
}
/* ipad screen */
@media screen and (min-width: 767px) and (max-width: 992px) {
  .company-logo {
    width: 48px;
    height: 48px;
  }
  .a-experience:first-child {
    margin-bottom: 32px;
  }
  .a-experience {
    margin-bottom: 32px;
  }
  .a-experience:last-child {
    margin-bottom: 0;
  }
}

/* ipad pro screen */
@media screen and (min-width: 993px) and (max-width: 1200px) {
  .company-logo {
    width: 48px;
    height: 48px;
  }
  .a-experience:first-child {
    margin-bottom: 32px;
  }
  .a-experience {
    margin-bottom: 32px;
  }
  .a-experience:last-child {
    margin-bottom: 0;
  }
  .divider-row:first-child {
    border-bottom: 1px solid var(--black06);
    width: 100%;
  }
  .divider-row {
    border-bottom: 1px solid var(--black06);
    width: 100%;
  }
  .divider-row:last-child {
    border-bottom: 0px solid var(--black06);
    width: 100%;
  }
  .divider-row > div > ul {
    margin-bottom: 8px;
  }
}

/* desktop screen */
@media screen and (min-width: 1201px) {
  .company-logo {
    width: 48px;
    height: 48px;
  }
  .a-experience:first-child {
    margin-bottom: 32px;
  }
  .a-experience {
    margin-bottom: 32px;
  }
  .a-experience:last-child {
    margin-bottom: 0;
  }
  .divider-row:first-child {
    border-bottom: 1px solid var(--black06);
    width: 100%;
  }
  .divider-row {
    border-bottom: 1px solid var(--black06);
    width: 100%;
  }
  .divider-row:last-child {
    border-bottom: 0px solid var(--black06);
    width: 100%;
  }
  .divider-row > div > ul {
    margin-bottom: 8px;
  }
}
</style>
