<template>
    <div class="info-card">
        <div class="info-card-content">
            <div class="info-card-text">
                <h4 class="mb-0">{{ data }}</h4>
                <small>{{ dataLabel }}</small>
            </div>
        </div>
        <div :class="`info-card-icon ${iconClass}`" :style="typeof iconClass != 'undefined' ? 'color: #fff;' : ''">
            <h1><i :class="icon"></i></h1>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        icon: {
            type: String,
            required: true
        },
        iconClass: {
            type: String
        },
        data:{
            //this will be type of Any
        },
        dataLabel: {
            type: String
        }
    },
}
</script>

<style>
    .info-card {
        min-height: 107px;
        background-color: #ffffff;
        display: flex;
        padding: 0.25rem;
        position: relative;
    }

    .info-card-content {
        width: 60%;
    }

    .info-card-text {
        margin-top: 1rem;
        margin-left: 1em;
    } 

    .info-card-icon {
        text-align: center;
        width: 40%;
    }

    .info-card-icon h1 {
        line-height: 200%;
        vertical-align: middle;
    }
</style>
