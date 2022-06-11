<template>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link class="nav-item nav-link" :to="{name:'home'}">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-item nav-link" :to="{name:'desks'}">Desks</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-item nav-link" :to="{name:'about'}">About</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <router-view></router-view>
    </div>
</div>

</template>

<script>
export default {
}
</script>

