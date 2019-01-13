<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-wysiwyg label="Text" :name="fieldName('text')" note="Hint message" :options='{"modules":{"toolbar":[{"header":[1,2,3,4,5,false]},{"list":"ordered"},{"list":"bullet"},{"indent":"-1"},{"indent":"+1"}],"syntax":false}}' placeholder='Text' in-store="value" ></a17-wysiwyg>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
