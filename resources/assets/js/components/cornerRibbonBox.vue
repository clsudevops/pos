<template>
    <div class="box pa-3">
        <div class="ribbon">
            <span>Popular</span>
        </div>

        <v-layout row wrap>
            <v-flex xs3>
                <v-card-media :src="item.logo"
                    height="110px">
                </v-card-media>
            </v-flex>
            <v-flex xs9>
                
                <h6 class="title">{{ item.name }}</h6>
                <!-- <p class="mb-2 sbi">{{ restaurant.category }}</p> -->
                <p class="mb-0 sba">{{ item.description }}
                    <!-- <span class="sbt">Opens at {{ restaurant.openTime }}</span> -->
                </p>
                <div>
                    <v-btn color="success" small>
                        Order now
                    </v-btn>
                    <v-btn color="warning" small>
                        View
                    </v-btn>
                </div>
            </v-flex>
        </v-layout>

    </div>
</template>

<script>
    export default {
        props: {
            item: {
                type: Object,
                required: true
            }
        }
    };
</script>

<style>
    .sbi {
        font-style: italic;
        font-size: 12px;
        color: #918e8e;
    }

    .sba {
        font-size: 12px;
    }

    .sbt {
        color: palevioletred;
    }

    /*
* Ribbon box
*/

    .box {
        width: 100%;
        height: 150px;
        position: relative;
        border: 1px solid #eee;
        background: #fff;
    }

    .ribbon {
        position: absolute;
        left: -5px;
        top: -5px;
        z-index: 1;
        overflow: hidden;
        width: 75px;
        height: 75px;
        text-align: right;
    }

    .ribbon span {
        font-size: 10px;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        line-height: 20px;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        width: 100px;
        display: block;
        background: #E91E63;
        background: linear-gradient(#E91E63 0%, #E91E63 100%);
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 19px;
        left: -21px;
    }

    .ribbon span::before {
        content: "";
        position: absolute;
        left: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid #E91E63;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #E91E63;
    }

    .ribbon span::after {
        content: "";
        position: absolute;
        right: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid transparent;
        border-right: 3px solid #E91E63;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #E91E63;
    }
</style>