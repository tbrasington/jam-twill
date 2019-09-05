<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-locale type="a17-filefield" :attributes="{ label: 'Video file', itemLabel: 'video file', name: fieldName('video_file'), note: 'Must be an mp4 file', max: 1 }"
></a17-locale><a17-inputframe label="Poster Frame" name="medias.poster_image" > <a17-mediafield :name="fieldName('poster_image')" crop-context="poster_image" >Minimum image width: 1500px</a17-mediafield> </a17-inputframe> <a17-vselect label="Autoplay" :name="fieldName('autoplay')" :options='[{&quot;value&quot;:true,&quot;label&quot;:&quot;Yes&quot;},{&quot;value&quot;:false,&quot;label&quot;:&quot;No&quot;}]' :has-default-store="true" size="large" in-store="inputValue" > </a17-vselect>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
