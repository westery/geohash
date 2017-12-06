# geohash
GeoHash library
<div class="article fmt article__content" data-id="1190000002513514" data-license="cc">
                    
<p>网上的关于Geohash的精度问题的说明都不够完整，做了一下补充，可以参见本文表格。</p>

<div class="widget-codetool" style="display: none;">
      <div class="widget-codetool--inner">
      <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
      <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="具体的计算方法：
    Latitude的范围是：-90 到 +90
   Longitude的范围：-180 到 +180
   地球参考球体的周长：40075016.68米
" title="" data-original-title="复制"></span>
      <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
      </div>
      </div><pre class="hljs lsl"><code>具体的计算方法：
    Latitude的范围是：<span class="hljs-number">-90</span> 到 +<span class="hljs-number">90</span>
   Longitude的范围：<span class="hljs-number">-180</span> 到 +<span class="hljs-number">180</span>
   地球参考球体的周长：<span class="hljs-number">40075016.68</span>米
</code></pre>

<table>
<thead><tr>
<th><strong>geohash长度</strong></th>
  <th><strong>Lat位数</strong></th>
  <th><strong>Lng位数</strong></th>
  <th><strong>Lat误差</strong></th>
  <th><strong>Lng误差</strong></th>
  <th><strong>km误差</strong></th>
</tr></thead>
<tbody>
<tr>
<td>1</td>
  <td>2</td>
  <td>3</td>
  <td>±23</td>
  <td>±23</td>
  <td>±2500</td>
</tr>
<tr>
<td>2</td>
  <td>5</td>
  <td>5</td>
  <td>± 2.8</td>
  <td>±5.6</td>
  <td>±630</td>
</tr>
<tr>
<td>3</td>
  <td>7</td>
  <td>8</td>
  <td>± 0.70</td>
  <td>± 0.7</td>
  <td>±78</td>
</tr>
<tr>
<td>4</td>
  <td>10</td>
  <td>10</td>
  <td>± 0.087</td>
  <td>± 0.18</td>
  <td>±20</td>
</tr>
<tr>
<td>5</td>
  <td>12</td>
  <td>13</td>
  <td>± 0.022</td>
  <td>± 0.022</td>
  <td>±2.4</td>
</tr>
<tr>
<td>6</td>
  <td>15</td>
  <td>15</td>
  <td>± 0.0027</td>
  <td>± 0.0055</td>
  <td>±0.61</td>
</tr>
<tr>
<td>7</td>
  <td>17</td>
  <td>18</td>
  <td>±0.00068</td>
  <td>±0.00068</td>
  <td>±0.076</td>
</tr>
<tr>
<td>8</td>
  <td>20</td>
  <td>20</td>
  <td>±0.000086</td>
  <td>±0.000172</td>
  <td>±0.01911</td>
</tr>
<tr>
<td>9</td>
  <td>22</td>
  <td>23</td>
  <td>±0.000021</td>
  <td>±0.000021</td>
  <td>±0.00478</td>
</tr>
<tr>
<td>10</td>
  <td>25</td>
  <td>25</td>
  <td>±0.00000268</td>
  <td>±0.00000536</td>
  <td>±0.0005971</td>
</tr>
<tr>
<td>11</td>
  <td>27</td>
  <td>28</td>
  <td>±0.00000067</td>
  <td>±0.00000067</td>
  <td>±0.0001492</td>
</tr>
<tr>
<td>12</td>
  <td>30</td>
  <td>30</td>
  <td>±0.00000008</td>
  <td>±0.00000017</td>
  <td>±0.0000186</td>
</tr>
</tbody>
</table>

                </div>
