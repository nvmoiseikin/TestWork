<template>
    <div class="popup-container">
        <div class="popup-src" @click="show">
            <i class="fas fa-play"></i>
            Смотреть видео
        </div>
        <modal
                width="70%"
                height="auto"
                name="video"
                @before-close="hide">
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
                    muted: 'false',
                    language: 'en',
                    playbackRates: [0.7, 1.0, 1.5, 2.0],
                    height: 'auto',
                    autoplay: 'true',
                    liveui: "true",
                    loop: "true",
                    sources: [{
                        type: "video/mp4",
                        src: "/site_img/Landscape577.mp4"
                    }],

                    poster: "/site_img/hometheater0.jpg",
                }
            };
        },
        computed: {
            player() {
                return this.$refs.videoPlayer.player;
            }
        },
        methods: {
            show () {
                this.$modal.show('video');
                $('.popup-container').css("z-index", '100000');
            },
            hide () {
                $('.popup-container').css("z-index", "2");
            },
            playerIsReady(player) {
                console.log('example 2 ready!', player);
                player.hotkeys({
                    volumeStep: 0.1,
                    seekStep: 5,
                    enableModifiersForNumbers: true,
                    fullscreenKey: function(event, player) {
                        // override fullscreen to trigger when pressing the F key or Ctrl+Enter
                        return ((event.which === 70) || (event.ctrlKey && event.which === 13));
                    }
                })
            }
        }
    }
</script>