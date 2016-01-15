@extends('client::layouts.default')

@section('content')
    <section class="document-view" ng-controller="AboutController">
        <div class="row">
            <div class="small-12 columns">
                <div class="row">
                    <div class="small-6 columns">
                        <div class="about-intro">
                            <em>Mission:</em> To engage individuals and their communities in programs that improve senior health and well-being
                        </div>
                    </div>
                    <div class="small-6 columns full-width">
                        <div class="about-intro">
                            <em>Vision:</em> To be a valued national leader in efforts to promote senior health through trusted partnerships among academic, healthcare, and community organizations
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-3 columns doc-left">
                <h5>Terms of use</h5>
                <p>The content offered on this site is provided as a courtesy and is to be used for informational purposes only. It is not represented to be error free, nor is it guaranteed to be current or complete. In no event will the CRC-Senior Health or its staff be liable for any damages that might result from the use of any content on the site. By providing links to other sites, the CRC-Senior Health does not guarantee, approve, or endorse the information or products available on these sites.</p>
                <h5>Intellectual property </h5>
                <p>All of the content displayed on this site is owned by the CRC-Senior Health and is protected by copyright laws. You may use, download, reproduce, and publicly display content from this site for personal or noncommercial purposes provided that you attribute the content to the CRC-Senior Health. Suggested citation: <a href="/index.php">Community Research Center for Senior Health. Toolkit on Evidence-Based Programming for Seniors.</a></p>
            </div>
            <div class="small-9 columns doc-right">
                <p>The Community Research Center for Senior Health (CRC-SH,The Center) is a partnership among Baylor Scott & White Health, Central Texas Area Agencies on Aging and Aging and Disability Research Center (AAA/ADRC), and the Texas A&amp;M Health Science Center School of Public Health. It is built on the partner's’ capacity to conduct state-of-the-art applied health science research and education to improve Senior health.</p>
                <p>The Center has established a sustainable infrastructure that promotes an interdisciplinary approach to senior health intervention research, develops community-academic health center relationships which foster community participation, and provides guidance and support to investigators and community leaders in research design, evaluation, and data analytic techniques.</p>
                <p>The CRC-Senior Health’s leadership team is comprised of a representative from each partner. <a href="#" ng-click="showDetail('alan-stevens', $event)">Dr. Alan Stevens</a> of Baylor Scott &amp; White Health is the director, <a href="#" ng-click="showDetail('marcia-ory', $event)">Dr. Marcia Ory</a> of the School of Public Health is the associate director for academic research, and <a href="#" ng-click="showDetail('richard-mcghee', $event)">Mr. Richard McGhee</a> of the Central Texas Area Agency on Aging is the associate director for community research.</p>
                <p>Acknowledgement: Initial funding for the CRC-Senior Health was provided by the National Institute on Aging (RC4AG038183-01).</p>
            </div>
        </div>
        <div class="modal-container" ng-class="{ 'is-visible': modalVisible }">
            <div class="modal-overlay" ng-click="dismissDetail()"></div>
            <div class="modal program-detail">
                <div class="content-box">
                    <a href="#" class="modal-close" ng-click="dismissDetail($event)"><i class="fa fa-times"></i></a>
                    <img class="program-image" ng-src="<% leader.image %>" class="program-img" />
                    <h2 class="program-title" ng-bind-html="leader.header"></h2>
                    <div class="program-description" ng-bind-html="leader.bio"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
