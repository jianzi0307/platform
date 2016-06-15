<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>API Document</title>
    <link href="/assets/docs/base.css" rel="stylesheet" />
    <link href="/assets/docs/prism.css" rel="stylesheet" />
</head>
<body>
<header class="box-shadow">
    <h1>API Document</h1>
</header>
<div >
    <section class="item-striped">
        <ul>
            <li class="sub-title">1.登录</li>
            <ul>
                <li>
                    <strong>URL：</strong>
                    <p>//[域名]/v1/user/login</p>
                </li>
                <li>
                    <strong>HTTP方法：</strong>
                    <p>POST</p>
                </li>
                <li>
                    <strong>请求参数说明：</strong>
                    <p>请求报文的内容以application/json格式组织：</p>
                    <p>
                    <table class="gridtable table-condensed">
                        <thead>
                        <tr>
                            <th>参数</th>
                            <th>类型</th>
                            <th>参数名</th>
                            <th>描述</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>username</td>
                            <td>string</td>
                            <td>用户名</td>
                            <td>用户在登录窗输入</td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td>string</td>
                            <td>用户密码</td>
                            <td>用户在登录窗输入</td>
                        </tr>
                        <tr class="tr-italic">
                            <td>devtype</td>
                            <td>integer</td>
                            <td>设备类型</td>
                            <td> 1 iphone, 2 andriod设备, 3 pc, 4 其他</td>
                        </tr>
                        <tr class="tr-italic">
                            <td>ttid</td>
                            <td>string</td>
                            <td>第三方合作伙伴统计标识</td>
                            <td><u>ttid生成规则</u></td>
                        </tr>
                        </tbody>
                    </table>
                    </p>
                </li>
                <li>
                    <strong>请求示例：</strong>
<pre><code class="language-javascript">POST / HTTP/1.1
Host:           [域名]
Content-Type:   application/json
Content-Length: xxxxx
{"username":"jianzi", "password":"111111"}</code></pre>
                </li>
                <li>
                    <strong>响应参数说明：</strong>
                    <p>
                    <table class="gridtable table-condensed">
                        <thead>
                        <tr>
                            <th>参数</th>
                            <th>类型</th>
                            <th>参数名</th>
                            <th>描述</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>userid</td>
                            <td>string</td>
                            <td>用户ID</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>token</td>
                            <td>string</td>
                            <td>登录令牌</td>
                            <td>后续接口交互中使用</td>
                        </tr>
                        <tr>
                            <td>timestamp</td>
                            <td>integer</td>
                            <td>服务器时间戳</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>

                    </p>
                </li>
                <li>
                    <strong>正确响应示例：</strong>
<pre><code class="language-javascript">HTTP/1.1 200 OK
Content-Type:   application/json
Cache-Control:  no-store
{"code":0, "msg":"ok", "data":{"userid":"10001","token":"MzIzYjQ1Mzg4NWY1MTgxZg==","timestamp":"1465983888"}}</code></pre>
                </li>
                <li>
                    <strong>错误响应示例：</strong>
<pre><code class="language-javascript">HTTP/1.1 200 OK
Content-Type:   application/json
Cache-Control:  no-store
{"code":10001, "msg":"用户不存在"}</code></pre>
                </li>
                <li>
                    <strong>错误返回码说明：</strong>
                    <p>
                    <table class="gridtable table-condensed">
                        <thead>
                        <tr>
                            <th>错误码</th>
                            <th>说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>10001</td>
                            <td>用户不存在</td>
                        </tr>
                        </tbody>
                    </table>

                    </p>
                </li>
            </ul>
        </ul>
    </section>

    <section class="item-striped">
        <ul>
            <li class="sub-title">2.token验证</li>
            <ul>
                <li>
                    <strong>URL：</strong>
                    <p>//[域名]/v1/user/chktoken</p>
                </li>
                <li>
                    <strong>HTTP方法：</strong>
                    <p>POST</p>
                </li>
                <li>
                    <strong>请求参数说明：</strong>
                    <p>请求报文的内容以application/json格式组织：</p>
                    <p>
                    <table class="gridtable table-condensed">
                        <thead>
                        <tr>
                            <th>参数</th>
                            <th>类型</th>
                            <th>参数名</th>
                            <th>描述</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>userid</td>
                            <td>string</td>
                            <td>用户ID</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>token</td>
                            <td>string</td>
                            <td>登录token</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>sign</td>
                            <td>string</td>
                            <td>签名</td>
                            <td>签名规则: md5(userid+token+appsecret)</td>
                        </tr>
                        </tbody>
                    </table>
                    </p>
                </li>
                <li>
                    <strong>请求示例：</strong>
<pre><code class="language-javascript">POST / HTTP/1.1
Host:           [域名]
Content-Type:   application/json
Content-Length: xxxxx
{"userid":"10001", "token":"MzIzYjQ1Mzg4NWY1MTgxZg==", "sign":"f668bd04d1a6cfc29378e24829cddba9"}</code></pre>
                </li>
                <li>
                    <strong>响应参数说明：</strong>
                    <p>
                    <table class="gridtable table-condensed">
                        <thead>
                        <tr>
                            <th>参数</th>
                            <th>类型</th>
                            <th>参数名</th>
                            <th>描述</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>userid</td>
                            <td>string</td>
                            <td>用户ID</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>token</td>
                            <td>string</td>
                            <td>登录令牌</td>
                            <td>后续接口交互中使用</td>
                        </tr>
                        <tr>
                            <td>timestamp</td>
                            <td>integer</td>
                            <td>服务器时间戳</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>

                    </p>
                </li>
                <li>
                    <strong>正确响应示例：</strong>
<pre><code class="language-javascript">HTTP/1.1 200 OK
Content-Type:   application/json
Cache-Control:  no-store
{"err":0, "msg":"ok", "data":{"userid":"10001","token":"MzIzYjQ1Mzg4NWY1MTgxZg==","timestamp":"1465983888"}}</code></pre>
                </li>
                <li>
                    <strong>错误响应示例：</strong>
<pre><code class="language-javascript">HTTP/1.1 200 OK
Content-Type:   application/json
Cache-Control:  no-store
{"err":10001, "msg":"用户不存在"}</code></pre>
                </li>
                <li>
                    <strong>错误返回码说明：</strong>
                    <p>
                    <table class="gridtable table-condensed">
                        <thead>
                        <tr>
                            <th>错误码</th>
                            <th>说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>10001</td>
                            <td>用户不存在</td>
                        </tr>
                        </tbody>
                    </table>

                    </p>
                </li>
            </ul>
        </ul>
    </section>
</div>
<footer>

</footer>
<script src="/assets/docs/prism.js"></script>
</body>
</html>