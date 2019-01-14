<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-locale type="a17-filefield" :attributes="{ label: 'Video file', itemLabel: 'video file', name: fieldName('video_file'), note: 'Must be an mp4 ', max: 1 }"
></a17-locale>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
