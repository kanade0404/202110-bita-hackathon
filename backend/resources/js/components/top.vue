<template>
  <div class="wrapper">
    <div class="profileArea areaBorder">
      <div>
        <div class="profileImg"><img :src="profileImg"></div>
        <div>名前名前</div>
      </div>
      <div>
        <ul>
          <li>部活名</li>
          <li>部活名</li>
          <li>部活名</li>
        </ul>
      </div>
    </div>
    <div class="timeLine">
      <ul>
        <li class="clubCasset">
          <div>
            <div>部活名</div>
            <div>参加者募集</div>
          </div>
          <p>
            お疲れ様です！！
            <br>最近、ボドゲ会は平日に行うことが多いですが、たまには休日のまとまった時間でボドゲしましょう！！
            <br>日程の入力をお願いしますm(_ _)m
          </p>
        </li>
        <li class="clubCasset">
          <div>
            <div>部活名</div>
            <div>参加者募集</div>
          </div>
          <p>
            お疲れ様です！！
            <br>最近、ボドゲ会は平日に行うことが多いですが、たまには休日のまとまった時間でボドゲしましょう！！
            <br>日程の入力をお願いしますm(_ _)m
          </p>
        </li>
        <li class="clubCasset">
          <div>
            <div>部活名</div>
            <div>参加者募集</div>
          </div>
          <p>
            お疲れ様です！！
            <br>最近、ボドゲ会は平日に行うことが多いですが、たまには休日のまとまった時間でボドゲしましょう！！
            <br>日程の入力をお願いしますm(_ _)m
          </p>
        </li>
        <li class="clubCasset">
          <div>
            <div>部活名</div>
            <div>参加者募集</div>
          </div>
          <p>
            お疲れ様です！！
            <br>最近、ボドゲ会は平日に行うことが多いですが、たまには休日のまとまった時間でボドゲしましょう！！
            <br>日程の入力をお願いしますm(_ _)m
          </p>
        </li>
      </ul>
    </div>
    <div class="">
      <div>決まった部活</div>
      <ul>
        <li><div>日程</div><div>部活名部活名</div></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      profileImg: 'https://mikan.bita.jp/img/members_img/15656647750seiya_sakata_mikan.jpg',
    };
  },
}
</script>

<style lang="scss" scoped>
@import '../../sass/reset';

.wrapper {
  display: flex;
  justify-content: space-around;
  .profileArea {
    .profileImg {
      position:relative;
      overflow: hidden;
      width:100px;
      height:100px;
      border-radius:50%;
      & img{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height:100%;
      }
    }
  }
  .timeLine {
    width: 500px;
    .clubCasset {
      margin: 10px 0;
      border-radius: 5px;
      padding: 12px 16px;
      box-shadow: 0 1px 5px #d3d4d4;
    }
  }
}
</style>