<template>
  <b-navbar sticky class="navigation" toggleable="md" type="dark" variant="primary">
    <b-navbar-brand>The Linemaster</b-navbar-brand>

    <b-nav-form>
      <b-form-input class="mr-sm-2" type="text" placeholder="Search"></b-form-input>
    </b-nav-form>

    <b-navbar-nav class="ml-auto">
      <b-nav-item-dropdown right>
        <!-- Using button-content slot -->
        <template slot="button-content">
          <em>Emma</em>
        </template>
        <b-dropdown-item href="#">Settings</b-dropdown-item>
        <b-dropdown-item href="#">Signout</b-dropdown-item>
      </b-nav-item-dropdown>
    </b-navbar-nav>

  </b-navbar>
</template>

<style lang="scss" scoped>
  .navigation {
    margin-bottom: 30px;
  }
</style>