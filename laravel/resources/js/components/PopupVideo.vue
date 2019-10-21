<template>
    <div class="popup-container">
        <div class="popup-src" @click="show">
            Смотреть видео
        </div>
        <modal
                width="70%"
                height="auto"
                name="video">
            <video-player
                    ref="videoPlayer"
                    :options="playerOptions"
                    :playsinline="true"
            >
            </video-player>
        </modal>
    </div>
</template>
<style lang="scss">
    @import "~bulma";
    @import url('https://fonts.googleapis.com/css?family=Roboto:200,600,500');
    .popup-container{
        .v--modal{
            color: black;
        }
        .video-js{
            width: 100%;
            height: auto;
            video{
                height: auto;
                position: static;
            }
        }
        .vjs-fullscreen{
            video{
                position: absolute;
                height: 100%;
            }
        }
        .vjs-big-play-button{
            left: calc(50% - 43px);
            top: calc(50% - 20px);
        }
    }
</style>
<script>
    import $ from 'jquery'
    export default {
        data() {
            return {
                playerOptions: {
                    muted: true,
                    language: 'en',
                    techOrder: ['html5', 'flvjs'],
                    playbackRates: [0.7, 1.0, 1.5, 2.0],
                    height: 'auto',
                    sources: [{
                        type: "video/mp4",
                        src: "/site_img/Landscape577.mp4"
                    }],

                    poster: "/site_img/hometheater0.jpg",
                }
            };
        },
        methods: {
            show () {
                this.$modal.show('video');
            },
            hide () {
                this.$modal.hide('video');
            }
        }
    }
</script>