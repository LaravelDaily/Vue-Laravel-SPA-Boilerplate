<template>
    <div id="main">
        <navbar></navbar>

        <div class="container">
            <router-view></router-view>
        </div>

        <app-footer></app-footer>
    </div>

</template>

<script>
    import Navbar from './Navbar'
    import Footer from './Footer'

    export default {
        name: 'App',
        components: {
            'navbar': Navbar,
            'app-footer': Footer
        }
    }
</script>
