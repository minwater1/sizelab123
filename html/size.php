<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="description" content="학부융합프로젝트">
    <meta name="keywords" content="HTML5, CSS, JQUERY">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">
    <title>수치 입력 | SizeLab</title>
	<style>
	@media(max-height: 1400px) {
  .container{
    height: 100%;
  }
}
</style>
</head>

<body>
  <div class = "container">
	<div class="sizelab-wrapper wrapper-member">
	 <a href="../Main.html" style= "color:black; text-decoration: none; text-align: center;">
            <h1 class="header__title" style="font-size: 3em">SizeLab</h1>
            </a>

	<!-- Member -->
	<div class="n-member-area form-area">
		<form name="joinForm" id="joinForm" action="/member/v2/join/verify" method="post" novalidate>
		
			<!-- Header -->
			<header class="member-header">
					<h1 style = "text-align: center">사이즈 입력</h1>
			</header>
			<br>
			<div>
				<div style = "float:left; margin-right:80px;">
						<b><label for="memberId">나이</label></b>&nbsp;
						<select>
							<option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
							<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option>
							<option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option>
							<option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option>
							<option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option>
							<option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
							<option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option>
							<option>57</option><option>58</option><option>59</option><option>60</option><option>61</option><option>62</option>
							<option>63</option><option>64</option><option>65</option><option>66</option><option>67</option><option>68</option>
							<option>69</option><option>70</option>
						</select>
						<p id="hLayerid"></p>
				</div>
				
				<div style = "float:left">
						<b><label for="memberId">키</label></b>&nbsp;
						<select>
							<option>150</option><option>151</option><option>152</option><option>153</option><option>154</option><option>155</option>
							<option>156</option><option>157</option><option>158</option><option>159</option><option>160</option><option>161</option>
							<option>162</option><option>163</option><option>164</option><option>165</option><option>166</option><option>167</option>
							<option>168</option><option>169</option><option>170</option><option>171</option><option>172</option><option>173</option>
							<option>174</option><option>175</option><option>176</option><option>177</option><option>178</option><option>179</option>
							<option>180</option><option>181</option><option>182</option><option>183</option><option>184</option><option>185</option>
							<option>186</option><option>187</option><option>188</option><option>189</option><option>190</option><option>191</option>
							<option>192</option><option>193</option><option>194</option><option>195</option><option>196</option><option>197</option>
							<option>198</option><option>199</option>
						</select>
						<p id="hLayerid"></p>
				</div>
				<br><br><br>
				<img src = "../image/sample.png" width = "350px;" >
				<div>
					<b><label for="height">기장</label></b>
					<input type="number" class="n-input2 input" id="height" name="height" maxlength="2">     <!-- 텍스트 부분 수정 필요 -->
					<p id="hLayerid"></p>
				</div>
				<br>
				<div>
					<b><label for="shoulder">어깨 너비</label></b>
					<input type="text" class="n-input2 input" id="shoulder" name="shoulder"  maxlength="2">
					<p id="hLayerid"></p>
				</div>
				<br>
				<div>
						<b><label for="chest">가슴 단면</label></b>
						<input type="text" class="n-input2 input" id="chest" name="chest" maxlength="2">
						<p class="n-validation" id="hLayerid"></p>
				</div>
				<br>
				<div>
						<b><label for="somae">소매 길이</label></b>
						<input type="text" class="n-input2 input" id="somae" name="somae" maxlength="2">
						<p class="n-validation" id="hLayerid"></p>
				</div><br><br>
			</div>
			
			<hr style="border: solid 2px; color:gray;"><br>
			<h1 style = "text-align: center">피부톤 선택</h1><br>
			
			<h2 style = "text-align: center">웜톤 피부</h2><br>
			<img src = "../image/warmton.png" width = "350px;" >
			<p>
				<input type = "radio" name = "tone" checked style = "margin: 0 50px 0 50px"> 
				<input type = "radio" name = "tone" style = "margin: 0 50px 0 50px">
				<input type = "radio" name = "tone" style = "margin: 0 50px 0 50px">
			</p><br>
			<h2 style = "text-align: center">쿨톤 피부</h2><br>
			<img src = "../image/coolton.png" width = "350px;" >
			<p>
				<input type = "radio" name = "tone" checked style = "margin: 0 50px 0 50px"> 
				<input type = "radio" name = "tone" style = "margin: 0 50px 0 50px">
				<input type = "radio" name = "tone" style = "margin: 0 50px 0 50px">
			</p>
			
			<br><br>
			<div id="joinBtnDiv" class="member-btn">
					<button type="submit" id="joinBtn" class="n-btn btn-accent">수정하기</button>
			</div>
		</form>
	</div>
    </div>
</div>
</body>
</html>