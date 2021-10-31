<template>
  <div class="adjustMember">
    <div class="adjustTitleMark"></div>
    <div class="adjustTitle">{{ title }}</div>
  </div>
</template>

<script>
export default {
  name: 'AdjustTitle',
  props: {
    title: {
      type: String,
      required: true,
    }
  }
}
</script>

<style lang="scss" scoped>
.adjustMember {
  padding: 0 40px;
  display: flex;
  align-items: center;
  margin-bottom: 14px;
  .adjustTitleMark {
    height: 28px;
    width: 10px;
    background: #808080;
    margin-right: 5px;
  }

  .adjustTitle {
    font-size: 16px;
  }
}
</style>