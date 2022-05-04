<h1>如何为二维码添加边框和标题</h1>

--- Abstract / Meta description ---

了解如何添加使您的二维码独一无二的边框和标题。使用醒目的号召性用语为您的 QR 码设置样式，以提高转化率。

--- Short content 1 ---

了解如何使用 QR 码标题添加吸引人的短语。从预定义的模板中选择或使用 PRO 帐户创建您自己的模板。

----------

<p>对于营销人员来说，一切都是为了转化。如果您设计了出色的广告，那么如果受众不以某种方式伸出援手，那将是徒劳的。</p>

<p><a href="#static:url">QR 码</a> 是一种有用的营销工具，但添加纯格式的 QR 码对营销材料上的创意作品并不公平。</p>

<p>观众可能会跳过二维码，即使它在视线范围内也是如此。通常，需要通过号召性用语 (CTA) 和独特的演示来让用户扫描 QR 码。</p>

<h2>为什么要为二维码添加边框和标题？</h2>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 1 - templates.png"
        alt="二维码模板 - ScanMeFindMe">
</p>

<p>您需要添加“扫描我”文本以及 QR 码，而不是坚持使用默认格式。当人们在日常生活中看到如此多的二维码时，可能会出现“二维码失明”。 </p>

<p>但是，“扫描我”的文字和独特的边框将他们的注意力吸引到 QR 码上。 CTA 毫不怀疑观众下一步应该做什么：扫描二维码。 </p>

<p>您还可以添加文本以预览 QR 码另一侧的内容。例如，“App Store”文本告诉用户他们即将被重定向到您在 Apple App Store 上的应用程序。或者一个简单的“菜单”，让用户查看您的餐厅提供的服务。</p>

<p>我们的想法是，您需要通过 QR 码来灌输信任并消除任何不确定性。客户喜欢在扫描 QR 之前了解他们正在进入的内容。使用正确的边框和标题，您可以做到这一点并提高转化率。</p>

<p>即使在<a href="#static:url">免费版二维码生成器</a>中，您也可以修改模板上的标题。将默认的<strong>“扫描我”</strong>更改为<strong>“更多信息”</strong>、<strong>“我们的菜单”</strong>、您的 Instagram 用户名或电话号码。如果您的文本太长或太短，您可以减小或增大字体大小以使其看起来更好。</p>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 2 - qr code instagram.png"
        alt="instagram 句柄的二维码 - ScanMeFindMe">
</p>

<p>使用模板个性化您的 QR 码不仅有助于营销，还可以防止您在整理它们时产生混淆。想象一下，您要打印数十个不同材料的二维码，您需要手动扫描它们以进行验证。有了标题和边框，您就可以通过它们的视觉外观了解它们的含义。</p>

<h2>如何创建自己的模板</h2>

<p>当您使用 <a href="#pro">ScanMeFindMe PRO</a> 时，您可以访问一组预先设计的模板。但是，您也可以设计自己的模板，上传它们并个性化我们平台上生成的<a href="#static:url">二维码</a>。</p>

<p>不仅如此，您还可以<a href="#article:about_presets">创建包含您选择的模板的预设</a>，以便将来节省时间。 </p>

<p>现在，您如何创建自己的模板？</p>

<p>模板是 SVG 格式的图像文件。 SVG 图像是一个 XML 文件，其中包含代表不同元素的标签。 Web 浏览器使用文件中的信息以任何分辨率呈现图像。您可以通过 Adobe Illustrator 等图形设计软件创建 SVG 文件，或使用 JPEG/PNG 到 SVG 转换器。</p>

<p>创建模板的最快方法是从库中复制一个模板并编辑 SVG 源代码。</p>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 3 - edit svg template.png"
        alt="编辑二维码模板 - ScanMeFindMe">
</p>

<p>要在 ScanMeFindMe 上工作的模板，它必须具有 <strong class="notranslate">id="qr"</strong> 的 <strong class="notranslate">&lt;rect&gt;</strong> 元素, 生成时会替换为二维码。</p>

<p>您还可以包含 <strong class="notranslate">&lt;text&gt;</strong> 元素，如果这些元素具有 <strong class="notranslate">id</strong> 属性，它们将成为标题您可以为使用此模板的每个二维码进行修改。此外，如果此类 <span class="notranslate">&lt;text&gt;</span> 元素包含 <strong class="notranslate">font-size</strong> 属性，您将能够更改字体大小每个二维码使用相同的模板。</p>

<p>注意一些限制！ ScanMeFindMe 使用 <a href="https://cairosvg.org/" class="smfm-externallink">CairoSVG</a> 库将生成的二维码转换为 PNG、PDF 和 PS 格式。一些复杂的 SVG 元素可能无法正确转换。出于安全原因，@include 指令在转换过程中会被忽略，因此您不能包含任何外部 URL（我们在服务器上安装的字体除外）。</p>

<h2>支持哪些字体？ </h2>

<p>与其陷入无休止的衬线与无衬线争论，我们让您决定几种常用字体的最佳选择。您可以在我们的 Github 存储库中找到服务器上预装的字体：<a href="https://github.com/ScanMeFindMe/fonts" class="smfm-externallink" target="_blank">https： //github.com/ScanMeFindMe/fonts</a></p>

<p>如果您觉得我们错过了为其他营销人员提供的有趣字体，您可以提交拉取请求。一般来说，我们更喜欢支持多种语言的字体。</p>

<p>现在开始使用 <a href="#pro">ScanMeFindMe PRO 帐户</a>上传您自己的模板。</p>
