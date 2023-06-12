<template>
    <div class="container">
        <h1>Posts</h1>
        <br />
        <ul v-for="post in posts" :key="post.id">
            <li>{{ post.id }} {{ post.post_name }}</li>

        </ul>
    </div>
</template>

<script>
    export default({
        data() {
            return
            posts: []
        },
        created() {

        },
        methods: {
            getPost(api_url){
                api_url = api_url || '/api/v2/posts'
                const headers = {
                    'Authorization': 'Bearer 2|GSGDgtGAxubVbZvFRJPfACOboaXNwaE58BPtDAcQ'
                };
                fetch(api_url, {headers})
                    .then(response=>response.json())
                    .then(response=>{
                        this.posts=response.data
                    })
                    .catch(error=>console.log(error))
            },
        }

    })
</script>