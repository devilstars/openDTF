<template>
    <div id="app">
        <global-header></global-header>
        <div class="flex max-w-screen-xl w-full mx-auto px-6">
            <div class="w-1/5">
                <sidebar />
            </div>
            <div class="w-3/5 pl-6 pr-6">
                2
            </div>
            <div class="w-1/5">
                3
            </div>
        </div>
    </div>
</template>

<script>
    import GlobalHeader from "./components/global/header/Header";
    import Sidebar from "./components/global/sidebar/Sidebar";
    export default {
        components: {Sidebar, GlobalHeader}
    }
</script>

<style lang="scss"></style>
