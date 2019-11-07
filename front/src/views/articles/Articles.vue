<template>
    <div class="mt-5">
        <sort-tool/>
        <template v-for="(item, index) in pd.data">
            <article-item :key="'post_' + index + '_' + item.id"
                          :data="item" />
        </template>
        <template v-if="!loading">
            <infinite-loading @distance="1" @infinite="infiniteHandler">
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
    import SortTool from "../../components/articles/SortTool";
    import ArticleItem from "../../components/articles/ArticleItem";
    import InfiniteLoading from 'vue-infinite-loading';

    export default {
        name: "Articles",
        components: {ArticleItem, SortTool, InfiniteLoading},
        data() {
            return {
                pd: {},
                page: 2,
                loading: true,
            }
        },
        created() {
            this._doRequest();
        },
        methods: {
            _doRequest() {
                this.loading = true;
                axios.get(this.$appConf.articleUrl.list, {
                    params: {
                        page: 1
                    }
                })
                    .then(response => {
                        this.pd = response.data;
                        this.loading = false;
                    }).catch(error => {
                    this.loading = false;
                    // this.showError(error);
                    console.log(error);
                });
            },
            infiniteHandler($state) {
                axios.get(this.$appConf.articleUrl.list, {
                    params: {
                        page: this.page
                    }
                })
                    .then(response => {
                        if (response.data.meta.last_page >= this.page) {
                            this.page += 1;
                            this.pd.data.push(...response.data.data);
                            $state.loaded();
                        } else {
                            $state.complete();
                        }
                    }).catch(error => {
                    $state.complete();
                    console.log(error);
                });
            },
        }
    }
</script>

<style scoped>

</style>
