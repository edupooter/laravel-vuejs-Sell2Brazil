<template>
  <li class="nav-item dropdown">
  </li>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {
  data() {
    return {}
  },
  computed: {
    ...mapGetters('I18NStore', ['locale', 'languages'])
  },
  methods: {
    ...mapActions('I18NStore', ['setLocale'])
  }
}
</script>

<style scoped>
.fixed-width {
  width: 1.3em;
  text-align: center;
  display: inline-block;
}
</style>
