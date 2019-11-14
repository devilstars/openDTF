<template>
    <div id="app" class="h-full">
        <global-header></global-header>
        <div class="flex max-w-screen-xl w-full mx-auto px-6 h-full pt-header">
            <div class="w-1/5 border-r-2">
                <sidebar />
            </div>
            <div class="w-3/5 pl-6 pr-6">
                <router-view></router-view>
            </div>
            <div class="w-1/5 border-l-2">
                <feed />
            </div>
        </div>
    </div>
</template>

<script>
    import GlobalHeader from "./components/global/header/Header";
    import Sidebar from "./components/global/sidebar/Sidebar";
    import Feed from "./components/global/Feed/Feed";
    export default {
        components: {Feed, Sidebar, GlobalHeader}
    }
</script>

<style lang="scss"></style>
