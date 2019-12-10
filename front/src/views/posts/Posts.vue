<template>
    <div class="mt-5">
        <sort-tool/>
        <template v-for="(item, index) in getPosts.data">
            <post-item :key="'post_' + index + '_' + item.id"
                          :data="item" />
        </template>
        <template v-if="!getLoading">
            <infinite-loading @distance="1" @infinite="infiniteLoader">
                <div slot="no-more" class="my-5">
                    <span class="my-5 text-gray-500">
                        Больше нет записей :)
                    </span>
                </div>
                <div slot="no-results">
                    <span class="my-5 text-gray-500">
                        Нет данных :/
                    </span>
                </div>
            </infinite-loading>
        </template>
    </div>
</template>

<script>
    import SortTool from "../../components/posts/SortTool";
    import PostItem from "../../components/posts/PostItem";
    import InfiniteLoading from 'vue-infinite-loading';
    import { mapGetters, mapActions } from "vuex";

    export default {
        name: "Posts",
        components: {PostItem, SortTool, InfiniteLoading},
        data() {
            return {}
        },
        created() {
            this.fetchPosts();
        },
        computed: {...mapGetters(["getPosts", "getLoading"])},
        methods: {
            ...mapActions(['fetchPosts', 'infiniteLoader']),
        }
    }
</script>

<style scoped>

</style>
