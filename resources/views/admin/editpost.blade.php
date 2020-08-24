@extends('layouts.adminlayouts')

@section('title', 'Edit Post - Sultra1News')

@push('after-script')
<style>
    blockquote {
        margin-left: 100px;
    }
</style>
@endpush

@section('main-content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Blank Page</h1>
        </div>

        <div class="section-body">
            <textarea style="width:960px">
                <p><img style="float: right;" src="https://www.tiny.cloud/images/glyph-tinymce@2x.png" alt="TinyMCE" height="150px" /></p>
              <h2>The world&rsquo;s first rich text editor in the cloud</h2>
              <p>Have you heard about Tiny Cloud? It&rsquo;s the first step in our journey to help you deliver great content creation experiences, no matter your level of expertise. 50,000 developers already agree. They get free access to our global CDN, image proxy services and auto updates to the TinyMCE editor. They&rsquo;re also ready for some exciting updates coming soon.</p>
              <p>One of these enhancements is <strong>Tiny Drive</strong>: imagine file management for TinyMCE, in the cloud, made super easy. Learn more at <a href="https://www.tiny.cloud/tinydrive/">tiny.cloud/tinydrive</a>, where you&rsquo;ll find a working demo and an opportunity to provide feedback to the product team.</p>
              <h3>An editor for every project</h3>
              <p>Here are some of our customer&rsquo;s most common use cases for TinyMCE:</p>
              <ul>
              <li>Content Management Systems (<em>e.g. WordPress, Umbraco</em>)</li>
              <li>Learning Management Systems (<em>e.g. Blackboard</em>)</li>
              <li>Customer Relationship Management and marketing automation (<em>e.g. Marketo</em>)</li>
              <li>Email marketing (<em>e.g. Constant Contact</em>)</li>
              <li>Content creation in SaaS systems (<em>e.g. Eventbrite, Evernote, GoFundMe, Zendesk</em>)</li>
              </ul>
              <p>&nbsp;</p>
              <p>And those use cases are just the start. TinyMCE is incredibly flexible, and with hundreds of APIs there&rsquo;s likely a solution for your editor project. If you haven&rsquo;t experienced Tiny Cloud, get started today. You&rsquo;ll even get a free trial of our premium plugins &ndash; no credit card required!</p>
              </textarea>
        </div>
    </section>
</div>

@endsection

@push('after-script')
<script>
    tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: 'autolink print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
  toolbar1: 'undo redo | bold italic strikethrough forecolor backcolor | formatselect blockquote | link image | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat fullscreen',
  image_advtab: true,
  image_caption: true,
  image_list: [
    {title: 'Dog', value: 'mydog.jpg'},
    {title: 'Cat', value: 'mycat.gif'}
  ],
  font_formats: 'Aileron=aileron, sans-serif;Helvetica=helvetica, arial;Lato=lato, sans-serif;Lobster=lobster, chicago, serif;Noto Serif=noto serif, serif;Permanent Marker=permanent marker, sans-serif;Raleway=raleway, sans-serif;Roboto=roboto, sans-serif;Source Code Pro=source code pro, monospace',
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    'https://fonts.googleapis.com/css?family=Lato|Lobster|Noto+Serif|Permanent+Marker|Raleway|Roboto|Source+Code+Pro',
    '//www.tiny.cloud/css/codepen.min.css',
  ],
  content_style: "blockquote{margin-left:100px; padding:10px;background:#f0f0f0}"
 });
</script>
@endpush