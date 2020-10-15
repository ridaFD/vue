<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

    <div id="app" class="container">
        @include('projects._list')
        <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">

            <div class="control">
                <label class="label" for="name">Project Name</label>
                <input class="input" type="text"  id="name" name="name" v-model="form.name">

                <span class="" style="color: red" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
            </div>

            <div class="control">
                <label class="label" for="description">Project Description</label>
                <input class="input" type="text" name="description" id="description" v-model="form.description">

                <span class="" style="color: red" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
            </div>
            <div class="control">
                <button class="button is-primary" :disabled="form.errors.any()">Create</button>
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
