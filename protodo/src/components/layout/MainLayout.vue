<template>
    <header>
      <slot name="header"></slot>

    </header>
    <main>
      <slot></slot>
    </main>
    <footer>
      <slot name="footer"></slot>
    </footer>
</template>
<script>
import Navbar from "../common/Navbar.vue";

export default {
  components: {
    Navbar
  }
}
</script>
