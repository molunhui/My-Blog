<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<form action="<?php echo U('add'); ?>" method="post">
  <div>
    <label>用户名：</label>
    <input type="text" name="user_name"/>
  </div>
  <div>
    <label>邮箱：</label>
    <input type="email" name="email" value="allenice@qq.com"/>
  </div>
  <div>
    <label>年龄：</label>
    <select name="age">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7" selected>7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
      <option value="32">32</option>
      <option value="33">33</option>
      <option value="34">34</option>
      <option value="35">35</option>
      <option value="36">36</option>
      <option value="37">37</option>
      <option value="38">38</option>
      <option value="39">39</option>
      <option value="40">40</option>
      <option value="41">41</option>
      <option value="42">42</option>
      <option value="43">43</option>
      <option value="44">44</option>
      <option value="45">45</option>
      <option value="46">46</option>
      <option value="47">47</option>
      <option value="48">48</option>
      <option value="49">49</option>
      <option value="50">50</option>
    </select>
  </div>
  <div>
    <label>擅长技能：</label>
    <label><input name="skill[]" id="skill0" type="checkbox" value="0"/> javascript </label>
    <label><input name="skill[]" id="skill1" type="checkbox" value="1"/>lan1</label>
    <label><input name="skill[]" id="skill2" type="checkbox" value="2"/>lan2</label>
    <label><input name="skill[]" id="skill3" type="checkbox" value="3" checked/>lan3</label>
    <label><input name="skill[]" id="skill4" type="checkbox" value="4"/>lan4</label>
    <label><input name="skill[]" id="skill5" type="checkbox" value="5"/>lan5</label>
  </div>
  <div>
    <label>性别：</label>
    <label><input type="radio" value="1" name="gender" checked/> 男</label>
    <label><input type="radio" value="0" name="gender"/> 女</label>
  </div>
  <div>
    <label>个人简介：</label>
    <textarea name="introduction" cols="30" rows="10"></textarea>
  </div>
  <div>
    <label>性格：</label>
    <select name="character" multiple>
      <option value="0">温柔</option>
      <option value="1">残暴</option>
      <option value="2">腹黑</option>
      <option value="3">傲娇</option>
    </select>
  </div>
  <div>
    <input type="hidden" name="extra" value="其他信息"/>
    <input type="reset" value="重置"/>
    <input type="submit" value="提交"/>
    <input type="button" value="单纯是个按钮"/>
  </div>
</form>
</body>
</html>