<template>
    <div class="">
        <sidebar-filter />
        <sidebar-subs />
    </div>
</template>

<script>
    import SidebarFilter from "./SidebarFilter";
    import SidebarSubs from "./SidebarSubs";
    export default {
        name: "Sidebar",
        components: {SidebarSubs, SidebarFilter}
    }
</script>

<style scoped>

</style>
