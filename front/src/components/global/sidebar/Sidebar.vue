<template>
    <div class="h-screen-sidebar flex flex-col sticky top-header">
        <div class="scroll-thin overflow-y-auto">
            <sidebar-filter />
            <sidebar-subs />
            <sidebar-footer />
        </div>
    </div>
</template>

<script>
    import SidebarFilter from "./SidebarFilter";
    import SidebarSubs from "./SidebarSubs";
    import SidebarFooter from "./SidebarFooter";
    export default {
        name: "Sidebar",
        components: {SidebarFooter, SidebarSubs, SidebarFilter}
    }
</script>

<style scoped>

</style>
