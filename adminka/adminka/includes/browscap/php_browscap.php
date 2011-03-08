;;; Provided courtesy of http://browsers.garykeith.com
;;; Created on April 26, 2007 at 10:46:20 AM GMT
;;; http://forums.garykeith.com/changes

[GJK_Browscap_Version]
Version=3945
Released=Thu, 26 Apr 2007 10:46:20 -0000

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; DefaultProperties

[DefaultProperties]
Browser="DefaultProperties"
Version=0
MajorVer=0
MinorVer=0
Platform=unknown
Alpha=false
Beta=false
Win16=false
Win32=false
Win64=false
Frames=false
IFrames=false
Tables=false
Cookies=false
BackgroundSounds=false
AuthenticodeUpdate=
CDF=false
VBScript=false
JavaApplets=false
JavaScript=false
ActiveXControls=false
Stripper=false
isBanned=false
WAP=false
isMobileDevice=false
isSyndicationReader=false
Crawler=false
CSS=0
CssVersion=0
supportsCSS=false
AOL=false
aolVersion=0
netCLR=false
ClrVersion=0

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Ask

[Ask]
Parent=DefaultProperties
Browser="Ask"
Frames=true
Tables=true
Crawler=true

[Mozilla/?.0 (compatible; Ask Jeeves/Teoma*)]
Parent=Ask
Browser="Teoma"

[Mozilla/2.0 (compatible; Ask Jeeves)]
Parent=Ask
Browser="AskJeeves"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Fast/AllTheWeb

[Fast/AllTheWeb]
Parent=DefaultProperties
Browser="Fast/AllTheWeb"
Alpha=true
Beta=true
Win16=true
Win32=true
Win64=true
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
Stripper=true
isBanned=true
WAP=true
isMobileDevice=true
isSyndicationReader=true
Crawler=true

[*FAST Enterprise Crawler*]
Parent=Fast/AllTheWeb
Browser="FAST Enterprise Crawler"

[FAST Data Search Document Retriever/4.0*]
Parent=Fast/AllTheWeb
Browser="FAST Data Search Document Retriever"

[FAST MetaWeb Crawler (helpdesk at fastsearch dot com)]
Parent=Fast/AllTheWeb
Browser="FAST MetaWeb Crawler"

[Fast PartnerSite Crawler*]
Parent=Fast/AllTheWeb
Browser="FAST PartnerSite"

[FAST-WebCrawler/*]
Parent=Fast/AllTheWeb
Browser="FAST-WebCrawler"

[FAST-WebCrawler/*/FirstPage*]
Parent=Fast/AllTheWeb
Browser="FAST-WebCrawler/FirstPage"

[FAST-WebCrawler/*/Fresh*]
Parent=Fast/AllTheWeb
Browser="FAST-WebCrawler/Fresh"

[FAST-WebCrawler/*/PartnerSite*]
Parent=Fast/AllTheWeb
Browser="FAST PartnerSite"

[FAST-WebCrawler/*?Multimedia*]
Parent=Fast/AllTheWeb
Browser="FAST-WebCrawler/Multimedia"

[FastSearch Web Crawler for*]
Parent=Fast/AllTheWeb
Browser="FastSearch Web Crawler"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Google

[Google]
Parent=DefaultProperties
Browser="Google"
Frames=true
IFrames=true
Tables=true
JavaScript=true
Crawler=true

[AdsBot-Google (*http://www.google.com/adsbot.html)]
Parent=Google
Browser="AdsBot-Google"

[Feedfetcher-Google;*]
Parent=Google
Browser="Feedfetcher-Google"
isSyndicationReader=true

[Google-Sitemaps/*]
Parent=Google
Browser="Google-Sitemaps"

[Googlebot-Image/*]
Parent=Google
Browser="Googlebot-Image"
CDF=true

[googlebot-urlconsole]
Parent=Google
Browser="googlebot-urlconsole"

[Googlebot/2.1 (*http://www.google.com/bot.html)]
Parent=Google
Browser="Googlebot"

[Googlebot/2.1 (*http://www.googlebot.com/bot.html)]
Parent=Google
Browser="Googlebot"

[Googlebot/Test*]
Parent=Google
Browser="Googlebot/Test"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Google Search Appliance

[gsa-crawler*]
Parent=Google
Browser="Google Search Appliance"
Stripper=true
isBanned=true

[Mediapartners-Google/*]
Parent=Google
Browser="Mediapartners-Google"

[Mozilla/4.0 (compatible; Google Desktop)]
Parent=Google
Browser="Google Desktop"

[Mozilla/4.0 (compatible; GoogleToolbar*)]
Parent=Google
Browser="Google Toolbar"
Stripper=true
isBanned=true

[Mozilla/5.0 (compatible; Googlebot/2.1; *http://www.google.com/bot.html)]
Parent=Google
Browser="Googlebot"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Inktomi

[Inktomi]
Parent=DefaultProperties
Browser="Inktomi"
Frames=true
Tables=true
Crawler=true

[Mozilla/4.0]
Parent=Inktomi
Browser="Mozilla/4.0"

[Mozilla/4.0 (compatible; MSIE 5.0; Windows NT)]
Parent=Inktomi
Win32=true

[Mozilla/4.0 (compatible; Yahoo Japan; for robot study; kasugiya)]
Parent=Inktomi
Browser="Yahoo! RobotStudy"
Stripper=true
isBanned=true

[Mozilla/5.0 (compatible; Yahoo! DE Slurp; http://help.yahoo.com/help/us/ysearch/slurp)]
Parent=Inktomi
Browser="Yahoo! Directory Engine"

[Mozilla/5.0 (compatible; Yahoo! Slurp China; http://misc.yahoo.com.cn/help.html)]
Parent=Inktomi
Browser="Yahoo! Slurp China"

[Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp)]
Parent=Inktomi
Browser="Yahoo! Slurp"

[Mozilla/5.0 (Slurp/cat; slurp@inktomi.com; http://www.inktomi.com/slurp.html)]
Parent=Inktomi
Browser="Slurp/cat"

[Mozilla/5.0 (Slurp/si; slurp@inktomi.com; http://www.inktomi.com/slurp.html)]
Parent=Inktomi

[Scooter/*]
Parent=Inktomi
Browser="Scooter"

[Scooter/3.3Y!CrawlX]
Parent=Inktomi
Browser="Scooter/3.3Y!CrawlX"

[slurp]
Parent=Inktomi
Browser="slurp"

[Y!J-BSC/1.0*]
Parent=Inktomi
Browser="Y!J-BSC"
Stripper=true
isBanned=true

[Y!J-SRD/1.0]
Parent=Inktomi
Browser="Y!J-SRD"
Version=1.0
MajorVer=1
MinorVer=0

[Yahoo Mindset]
Parent=Inktomi
Browser="Yahoo Mindset"

[Yahoo Pipes*]
Parent=Inktomi
Browser="Yahoo Pipes"

[Yahoo! Mindset]
Parent=Inktomi
Browser="Yahoo! Mindset"

[Yahoo-Blogs/*]
Parent=Inktomi
Browser="Yahoo-Blogs"

[Yahoo-MMAudVid*]
Parent=Inktomi
Browser="Yahoo-MMAudVid"

[Yahoo-MMCrawler*]
Parent=Inktomi
Browser="Yahoo-MMCrawler"
Stripper=true
isBanned=true

[YahooFeedSeeker*]
Parent=Inktomi
Browser="YahooFeedSeeker"
isSyndicationReader=true
Crawler=false

[YahooSeeker/*]
Parent=Inktomi
Browser="YahooSeeker"
WAP=true
isMobileDevice=true

[YahooSeeker/CafeKelsa (compatible; Konqueror/3.2; FreeBSD*) (KHTML, like Gecko)]
Parent=Inktomi
Browser="YahooSeeker/CafeKelsa"

[YahooSeeker/CafeKelsa-dev (compatible; Konqueror/3.2; FreeBSD*) (KHTML, like Gecko)]
Parent=Inktomi

[YahooVideoSearch*]
Parent=Inktomi
Browser="YahooVideoSearch"

[YahooYSMcm*]
Parent=Inktomi
Browser="YahooYSMcm"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Lycos

[Lycos]
Parent=DefaultProperties
Browser="Lycos"
Frames=true
Tables=true
Crawler=true

[Lycos*]
Parent=Lycos
Browser="Lycos"

[Lycos-Proxy]
Parent=Lycos
Browser="Lycos-Proxy"

[Lycos-Spider_(modspider)]
Parent=Lycos
Browser="Lycos-Spider_(modspider)"

[Lycos-Spider_(T-Rex)]
Parent=Lycos
Browser="Lycos-Spider_(T-Rex)"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; MSN

[MSN]
Parent=DefaultProperties
Browser="MSN"
Frames=true
Tables=true
Crawler=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; MSN lanshanbot

[lanshanbot/1.0*]
Parent=MSN
Browser="lanshanbot"
Version=1.0
MajorVer=1
MinorVer=0

[Mozilla/4.0 (compatible; MSIE 6.0; Windows NT; MS Search 4.0 Robot, crawler)]
Parent=MSN
Browser="MS Search"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; MSN Images & Other Media

[msnbot-media/1.0*]
Parent=MSN
Browser="msnbot-media"
Version=1.0
MajorVer=1
MinorVer=0

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; MSN News

[msnbot-news/1.0*]
Parent=MSN
Browser="msnbot-news"
Version=1.0
MajorVer=1
MinorVer=0

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; MSN News Blog Aggregator

[msnbot-NewsBlogs/1.0*]
Parent=MSN
Browser="msnbot-NewsBlogs"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; MSN Shopping

[msnbot-Products/1.0*]
Parent=MSN
Browser="msnbot-Products"
Version=1.0
MajorVer=1
MinorVer=0

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; MSN Search

[msnbot/1.0*]
Parent=MSN
Browser="msnbot"
Version=1.0
MajorVer=1
MinorVer=0

[msnbot/1.0-MM*]
Parent=MSN
Browser="msnbot-MM"
Version=1.00
MajorVer=1
MinorVer=0

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Yahoo

[Yahoo]
Parent=DefaultProperties
Browser="Yahoo"
Frames=true
Tables=true
Crawler=true

[Mozilla/4.0 (compatible; Y!J; for robot study*)]
Parent=Yahoo
Browser="Y!J"

[mp3Spider cn-search-devel at yahoo-inc dot com]
Parent=Yahoo
Browser="Yahoo! Media"
Stripper=true
isBanned=true

[My Browser]
Parent=Yahoo
Browser="Yahoo! My Browser"

[Y!OASIS/*]
Parent=Yahoo
Browser="Y!OASIS"
Stripper=true
isBanned=true

[YahooYSMcm/2.0.0]
Parent=Yahoo
Browser="YahooYSMcm"
Stripper=true
isBanned=true

[YRL_ODP_CRAWLER]
Parent=Yahoo
Browser="YRL_ODP_CRAWLER"
Stripper=true
isBanned=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Baidu

[Baidu]
Parent=DefaultProperties
Browser="Baidu"
Frames=true
Tables=true
Crawler=true

[Baiduspider*]
Parent=Baidu
Browser="BaiDu"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Onet.pl Szukaj

[Onet.pl Szukaj]
Parent=DefaultProperties
Browser="Onet.pl Szukaj"
Frames=true
IFrames=true
Tables=true
Crawler=true

[Mozilla/5.0 (compatible; OnetSzukaj/5.0*]
Parent=Onet.pl Szukaj
Browser="OnetSzukaj"

[Onet.pl SA, http://szukaj.onet.pl]
Parent=Onet.pl Szukaj
Browser="Onet.pl"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Yandex

[Yandex]
Parent=DefaultProperties
Browser="Yandex"
Frames=true
IFrames=true
Tables=true
Cookies=true
Crawler=true

[Mozilla/4.0 (compatible; MSIE 5.0; YANDEX)]
Parent=Yandex

[Yandex/*]
Parent=Yandex

[YandexBlog/*]
Parent=Yandex
Browser="YandexBlog"
isSyndicationReader=true

[YandexSomething/*]
Parent=Yandex
Browser="YandexSomething"
isSyndicationReader=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Accoona

[Accoona]
Parent=DefaultProperties
Browser="Accoona"
Frames=true
IFrames=true
Tables=true
Crawler=true

[accoona*]
Parent=Accoona
Browser="Accoona"

[Accoona-AI-Agent/* (crawler at accoona dot com)]
Parent=Accoona
Browser="Accoona-AI-Agent"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Become

[Become]
Parent=DefaultProperties
Browser="Become"
Frames=true
Tables=true
Crawler=true

[*BecomeBot/*]
Parent=Become
Browser="BecomeBot"

[*BecomeBot@exava.com*]
Parent=Become
Browser="BecomeBot"

[*Exabot@exava.com*]
Parent=Become
Browser="Exabot"

[MonkeyCrawl/*]
Parent=Become
Browser="MonkeyCrawl"

[Mozilla/5.0 (compatible; BecomeJPBot/2.3; *)]
Parent=Become
Browser="BecomeJPBot"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Best of the Web

[Best of the Web]
Parent=DefaultProperties
Browser="Best of the Web"
Frames=true
Tables=true

[Mozilla/4.0 (compatible; BOTW Feed Grabber; *http://botw.org)]
Parent=Best of the Web
Browser="BOTW Feed Grabber"
isSyndicationReader=true
Crawler=false

[Mozilla/4.0 (compatible; BOTW Spider; *http://botw.org)]
Parent=Best of the Web
Browser="BOTW Spider"
Stripper=true
isBanned=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Boitho

[Boitho]
Parent=DefaultProperties
Browser="Boitho"
Frames=true
Tables=true
Crawler=true

[boitho.com-dc/*]
Parent=Boitho
Browser="boitho.com-dc"

[boitho.com-robot/*]
Parent=Boitho
Browser="boitho.com-robot"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Convera

[Convera]
Parent=DefaultProperties
Browser="Convera"
Frames=true
Tables=true
Crawler=true

[ConveraCrawler/*]
Parent=Convera
Browser="ConveraCrawler"

[ConveraMultiMediaCrawler/0.1*]
Parent=Convera
Browser="ConveraMultiMediaCrawler"
Version=0.1
MajorVer=0
MinorVer=1

[CrawlConvera*]
Parent=Convera
Browser="CrawlConvera"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Entireweb

[Entireweb]
Parent=DefaultProperties
Browser="Entireweb"
Frames=true
IFrames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[Mozilla/4.0 (compatible; SpeedySpider; www.entireweb.com)]
Parent=Entireweb

[Speedy Spider (Beta/*; www.entireweb.com)]
Parent=Entireweb

[Speedy Spider (Entireweb; Beta/*)]
Parent=Entireweb

[Speedy_Spider_(http://www.entireweb.com)]
Parent=Entireweb

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Envolk

[Envolk]
Parent=DefaultProperties
Browser="Envolk"
Frames=true
IFrames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[envolk/* (?http://www.envolk.com/envolk*)]
Parent=Envolk

[envolk?ITS?spider/* (?http://www.envolk.com/envolk*)]
Parent=Envolk

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Exalead

[Exalead]
Parent=DefaultProperties
Browser="Exalead"
Frames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[Exabot-Images/1.0]
Parent=Exalead
Browser="Exabot-Images"
Version=1.0
MajorVer=1
MinorVer=0

[Exabot-Test/*]
Parent=Exalead
Browser="Exabot-Test"

[Exabot/2.0]
Parent=Exalead
Browser="Exabot"

[Exabot/3.0]
Parent=Exalead
Browser="Exabot"
Version=3.0
MajorVer=3
MinorVer=0
Platform=Liberate

[Exalead NG/*]
Parent=Exalead
Browser="Exalead NG"
Stripper=true
isBanned=true

[Mozilla/5.0 (compatible; Exabot-Images/3.0;*)]
Parent=Exalead
Browser="Exabot-Images"

[Mozilla/5.0 (compatible; Exabot/3.0;*)]
Parent=Exalead
Browser="Exabot"
Stripper=false
isBanned=false

[Mozilla/5.0 (compatible; NGBot/*)]
Parent=Exalead

[ng/*]
Parent=Exalead
Browser="Exalead Previewer"
Version=1.0
MajorVer=1
MinorVer=0
Stripper=true
isBanned=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Excite

[Excite]
Parent=DefaultProperties
Browser="Excite"
Frames=true
Tables=true
Crawler=true

[Mozilla/4.0 (compatible; * sureseeker.com*)]
Parent=Excite
Browser="Excite sureseeker.com"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Galaxy

[Galaxy]
Parent=DefaultProperties
Browser="Galaxy"
Frames=true
Tables=true
Crawler=true

[GalaxyBot/*0 (http://www.galaxy.com/galaxybot.html)]
Parent=Galaxy
Browser="GalaxyBot"

[Mozilla/* (compatible; MSIE *; www.galaxy.com;*)]
Parent=Galaxy
Browser="GalaxyBot"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Ilse

[Ilse]
Parent=DefaultProperties
Browser="Ilse"
Frames=true
Tables=true
Crawler=true

[IlseBot/*]
Parent=Ilse

[INGRID/?.0*]
Parent=Ilse
Browser="Ilse"

[Mozilla/3.0 (INGRID/*]
Parent=Ilse
Browser="Ilse"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; iVia Project

[iVia Project]
Parent=DefaultProperties
Browser="iVia Project"
Frames=true
IFrames=true
Tables=true
Crawler=true

[DataFountains/DMOZ Downloader*]
Parent=iVia Project
Browser="DataFountains/DMOZ Downloader"
Stripper=true
isBanned=true

[DataFountains/DMOZ Feature Vector Corpus Creator*]
Parent=iVia Project
Browser="DataFountains/DMOZ Feature Vector Corpus"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Jayde Online

[Jayde Online]
Parent=DefaultProperties
Browser="Jayde Online"
Frames=true
Tables=true
Crawler=true

[ExactSeek Crawler/*]
Parent=Jayde Online
Browser="ExactSeek Crawler"

[exactseek-pagereaper-* (crawler@exactseek.com)]
Parent=Jayde Online
Browser="exactseek-pagereaper"
Stripper=true
isBanned=true

[exactseek.com]
Parent=Jayde Online
Browser="exactseek.com"

[Jayde Crawler*]
Parent=Jayde Online
Browser="Jayde Crawler"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Naver

[Naver]
Parent=DefaultProperties
Browser="Naver"
Stripper=true
isBanned=true
Crawler=true

[Cowbot-* (NHN Corp*naver.com)]
Parent=Naver
Browser="Naver Cowbot"

[Mozilla/4.0 (compatible; NaverBot/*; *)]
Parent=Naver

[Mozilla/4.0 (compatible; NaverBot/*; nhnbot@naver.com)]
Parent=Naver
Browser="Naver NaverBot"

[NaverBot-* (NHN Corp*naver.com)]
Parent=Naver
Browser="Naver NHN Corp"

[Yeti/*]
Parent=Naver
Browser="Yeti"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Openfind

[Openfind]
Parent=DefaultProperties
Browser="Openfind"
Frames=true
Tables=true
Crawler=true

[Gaisbot/*]
Parent=Openfind

[Openbot/*]
Parent=Openfind

[Openfind data gatherer*]
Parent=Openfind

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Orbiter

[Orbiter]
Parent=DefaultProperties
Browser="Orbiter"
Frames=true
Tables=true
Crawler=true

[Orbiter (?http://www.dailyorbit.com/bot.htm)]
Parent=Orbiter

[Orbiter (?http://www.thatsearchengine.com/bot.htm)]
Parent=Orbiter
Browser="Orbiter"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; PeerFactory

[PeerFactory]
Parent=DefaultProperties
Browser="PeerFactory"
Frames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[PeerFactor 404 crawler]
Parent=PeerFactory
Browser="PeerFactor 404 crawler"

[PeerFactor Crawler]
Parent=PeerFactory
Browser="PeerFactor Crawler"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Pogodak!

[Pogodak]
Parent=DefaultProperties
Browser="Pogodak!"
Frames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[Mozilla/5.0 (compatible; Pogodak*)]
Parent=Pogodak

[Mozilla/5.0 (compatible; TridentSpider/*)]
Parent=Pogodak

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Relevare

[Relevare]
Parent=DefaultProperties
Browser="Relevare"
Frames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[bumblebee/*]
Parent=Relevare
Browser="Relevare"

[Bumblebee@relevare.com]
Parent=Relevare

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Sensis

[Sensis]
Parent=DefaultProperties
Browser="Sensis"
Frames=true
IFrames=true
Tables=true
Crawler=true

[Sensis Web Crawler (search_comments\at\sensis\dot\com\dot\au)]
Parent=Sensis
Browser="Sensis Web Crawler"

[Sensis.com.au Web Crawler (search_comments\at\sensis\dot\com\dot\au)]
Parent=Sensis
Browser="Sensis.com.au Web Crawler"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Shunix

[Shunix]
Parent=DefaultProperties
Browser="Shunix"
Frames=true
IFrames=true
Tables=true
Crawler=true

[Mozilla/5.0 (compatible; ShunixBot/*)]
Parent=Shunix
Browser="ShunixBot"

[XunBot/*]
Parent=Shunix
Browser="Shunix XunBot"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Singing Fish

[Singing Fish]
Parent=DefaultProperties
Browser="Singing Fish"
Frames=true
Tables=true
Crawler=true

[asterias/*]
Parent=Singing Fish

[Mozilla/* (compatible; *Asterias Crawler v*)*]
Parent=Singing Fish

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Snap

[Snap]
Parent=DefaultProperties
Browser="Snap"
Stripper=true
isBanned=true
Crawler=true

[Mozilla/5.0 (*) Gecko/* Firefox/* SnapPreviewBot]
Parent=Snap

[snap.com beta crawler v0]
Parent=Snap

[snap.com*]
Parent=Snap
Browser="Snap"

[Snapbot/*]
Parent=Snap

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Sogou

[Sogou]
Parent=DefaultProperties
Browser="Sogou"
Frames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[shaboyi spider]
Parent=Sogou
Browser="Sogou/Shaboyi Spider"

[Sogou Pic Agent]
Parent=Sogou
Browser="Sogou/Image Crawler"

[sogou spider]
Parent=Sogou
Browser="Sogou/Spider"

[sogou web spider*]
Parent=Sogou
Browser="sogou web spider"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Thunderstone

[Thunderstone]
Parent=DefaultProperties
Browser="Thunderstone"
Frames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[*Webinator*]
Parent=Thunderstone
Browser="Webinator"

[Mozilla/* (compatible; T-H-U-N-D-E-R-S-T-O-N-E)]
Parent=Thunderstone
Browser="Texis"

[T-H-U-N-D-E-R-S-T-O-N-E]
Parent=Thunderstone
Browser="Texis"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Vagabondo

[Vagabondo]
Parent=DefaultProperties
Browser="Vagabondo"
Frames=true
IFrames=true
Tables=true
Crawler=true

[Mozilla/4.0 (compatible;  Vagabondo/*)]
Parent=Vagabondo
Version=2.2
MajorVer=2
MinorVer=2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; WISEnut

[WISEnut]
Parent=DefaultProperties
Browser="WISEnut"
Frames=true
Tables=true
Crawler=true

[Mozilla/4.0 compatible ZyBorg/* (wn*.zyborg@looksmart.net; http://www.WISEnutbot.com)]
Parent=WISEnut

[Mozilla/4.0 compatible ZyBorg/* Dead Link Checker (*@looksmart.net; http://www.WISEnutbot.com)]
Parent=WISEnut
Browser="Dead Link Checker"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Yoono

[Yoono]
Parent=DefaultProperties
Browser="Yoono"
Frames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[Mozilla/5.0 (compatible; Yoono; http://www.yoono.com/)]
Parent=Yoono

[yoono/* web-crawler/*]
Parent=Yoono

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; ZoomInfo

[ZoomInfo]
Parent=DefaultProperties
Browser="ZoomInfo"
Frames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[NextGenSearchBot 1 (for information visit http://about.zoominfo.com/PublicSite/NextGenSearchBot.asp)]
Parent=ZoomInfo
Browser="ZoomInfo"

[NextGenSearchBot 1 (for information visit http://www.eliyon.com/NextGenSearchBot)]
Parent=ZoomInfo
Browser="Eliyon"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Directories

[Directories]
Parent=DefaultProperties
Browser="Directories"
Frames=true
Tables=true
Crawler=true

[acontbot]
Parent=Directories
Browser="acontbot"

[aipbot/*]
Parent=Directories
Browser="aipbot"

[Findexa Crawler (http://www.findexa.no/gulesider/article26548.ece)]
Parent=Directories
Browser="Findexa Crawler"

[FirstGov.gov Search - POC:firstgov.webmasters@gsa.gov]
Parent=Directories
Browser="FirstGov.gov Search"

[http://www.istarthere.com (spider@istarthere.com)]
Parent=Directories
Browser="Istartere.com"
Stripper=true
isBanned=true

[Mackster (*)]
Parent=Directories
Browser="Mackster"

[Misterbot]
Parent=Directories
Browser="Misterbot"

[Mozilla/4.0 (compatible; MSIE 5.0; www.galaxy.com;*)]
Parent=Directories
Browser="Galaxy/LOGIKA Search Engine"

[Mozilla/5.0 (?http://www.toile.com/) ToileBot/*]
Parent=Directories
Browser="Toile"

[Mozilla/5.0 (Votay bot/*)]
Parent=Directories
Browser="Votay"
Stripper=true
isBanned=true

[Mozilla/6.0 (compatible; arameda.com Spider)]
Parent=Directories
Browser="Arameda"

[NationalDirectory-*Spider/*]
Parent=Directories
Browser="National Directory"
Stripper=true
isBanned=true

[Octopus/*]
Parent=Directories
Browser="Octopus"

[OpenIntelligenceData/1.* (?http://www.worldwideweb-x.com/openData.html)]
Parent=Directories
Browser="World Wide Web Directory Project"
Version=1.0
MajorVer=1
MinorVer=0
Stripper=true
isBanned=true

[Poirot]
Parent=Directories
Browser="Poirot"

[silk/1.*]
Parent=Directories
Browser="Slider"
Version=1.0
MajorVer=1
MinorVer=0

[WebFindBot(http://www.web-find.com)]
Parent=Directories
Browser="WebFindBot"

[Best Whois (http://www.bestwhois.net/)]
Parent=DNS Tools
Browser="Best Whois"

[DNSGroup/*]
Parent=DNS Tools
Browser="DNS Group Crawler"

[NG-Search/*]
Parent=Exalead
Browser="NG-SearchBot"

[TouchStone]
Parent=Feeds Syndicators
Browser="TouchStone"
isSyndicationReader=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; General Crawlers

[General Crawlers]
Parent=DefaultProperties
Browser="General Crawlers"
Frames=true
IFrames=true
Tables=true
Crawler=true

[*Networking4all*]
Parent=General Crawlers
Browser="Networking4all Bot"

[Aport]
Parent=General Crawlers
Browser="Aport"

[ArachnetAgent*]
Parent=General Crawlers

[Art-Online.com*]
Parent=General Crawlers
Browser="Art-Online.com"

[BabalooSpider/1.*]
Parent=General Crawlers
Browser="BabalooSpider"

[BeijingCrawler]
Parent=General Crawlers
Browser="BeijingCrawler"
Stripper=true
isBanned=true

[BilgiBot/*]
Parent=General Crawlers
Browser="BilgiBot"
Stripper=true
isBanned=true

[bot/* (bot; *bot@bot.bot)]
Parent=General Crawlers
Browser="bot"
Stripper=true
isBanned=true

[botlist]
Parent=General Crawlers
Browser="botlist"
Stripper=true
isBanned=true

[Botswana*]
Parent=General Crawlers
Browser="Botswana"

[BravoBrian BStop*]
Parent=General Crawlers
Browser="BravoBrian BStop"

[BruinBot*]
Parent=General Crawlers
Browser="BruinBot"

[CacheabilityEngine/*]
Parent=General Crawlers
Browser="CacheabilityEngine"

[ccubee/*]
Parent=General Crawlers
Browser="ccubee"

[CFM-SearchBot(http://www.cfm-search.com)]
Parent=General Crawlers
Browser="CFM-SearchBot"

[CJNetworkQuality; http://www.cj.com/networkquality]
Parent=General Crawlers
Browser="CJNetworkQuality"
Frames=true
Tables=true
Cookies=true

[Clushbot/*]
Parent=General Crawlers
Browser="Clushbot"
Stripper=true
isBanned=true

[Comodo HTTP(S) Crawler*]
Parent=General Crawlers
Browser="Comodo HTTP Crawler"

[Crawler Mozilla/4.0]
Parent=General Crawlers
Stripper=true
isBanned=true

[CrawlWave/*]
Parent=General Crawlers
Browser="CrawlWave"

[CSHttpClient/*]
Parent=General Crawlers
Browser="CSHttpClient"

[CydralSpider/1.9*]
Parent=General Crawlers
Browser="Cydral Web Image Search"
Version=1.9
MajorVer=1
MinorVer=9
Stripper=true
isBanned=true

[Cynthia 1.0]
Parent=General Crawlers
Browser="Cynthia"
Version=1.0
MajorVer=1
MinorVer=0

[DiamondBot/*]
Parent=General Crawlers
Browser="DiamondBot"
Stripper=true
isBanned=true

[Diff-Engine*]
Parent=General Crawlers

[DomainsDB.net MetaCrawler*]
Parent=General Crawlers
Browser="DomainsDB"

[dragonfly(ebingbong#playstarmusic.com)]
Parent=General Crawlers
Browser="eBingBong"
Stripper=true
isBanned=true

[Drupal (*)]
Parent=General Crawlers
Browser="Drupal"

[DTAAgent]
Parent=General Crawlers
Browser="DTAAgent"

[Dumbot (version *)]
Parent=General Crawlers
Browser="Dumbfind"

[EARTHCOM.info/*]
Parent=General Crawlers
Browser="EarthCom"

[EDI/* (Edacious & Intelligent*)]
Parent=General Crawlers
Browser="Edacious & Intelligent Web Crawler"
Stripper=true
isBanned=true

[EuripBot/*]
Parent=General Crawlers
Browser="Europe Internet Portal"

[eventax/*]
Parent=General Crawlers
Browser="eventax"

[FANGCrawl/*]
Parent=General Crawlers
Browser="FANGCrawl"
Stripper=true
isBanned=true

[favorstarbot/*]
Parent=General Crawlers
Browser="favorstarbot"
Stripper=true
isBanned=true

[FRSEEKBOT]
Parent=General Crawlers
Browser="FRSEEKBOT"

[Gaisbot*]
Parent=General Crawlers
Browser="Gaisbot"

[GeoBot/*]
Parent=General Crawlers
Browser="GeoBot"

[grub crawler]
Parent=General Crawlers
Browser="grub crawler"

[HiddenMarket-*]
Parent=General Crawlers
Browser="HiddenMarket"
Stripper=true
isBanned=true

[htdig/*]
Parent=General Crawlers
Browser="ht://Dig"

[HTTP-Test-Program]
Parent=General Crawlers
Browser="WebBug"
MajorVer=5

[HTTP/1.0]
Parent=General Crawlers
Browser="HTTP/1.0"

[http://www.almaden.ibm.com/cs/crawler*]
Parent=General Crawlers
Browser="IBM's WebFountain"

[ichiro/*]
Parent=General Crawlers
Browser="ichiro"

[InnerpriseBot/*]
Parent=General Crawlers
Browser="InnerpriseBot"

[InternetLinkAgent/*]
Parent=General Crawlers
Browser="InternetLinkAgent"

[iVia Page Fetcher*]
Parent=General Crawlers
Browser="iVia Software"
Stripper=true
isBanned=true

[JetBrains*]
Parent=General Crawlers
Browser="Omea Pro"

[KakleBot - www.kakle.com/0.1]
Parent=General Crawlers
Browser="KakleBot"

[KBeeBot/0.*]
Parent=General Crawlers
Browser="KBeeBot"
Stripper=true
isBanned=true

[Keyword Density/*]
Parent=General Crawlers
Browser="Keyword Density"

[LetsCrawl.com/1.0*]
Parent=General Crawlers
Browser="LetsCrawl.com"
Stripper=true
isBanned=true

[Lincoln State Web Browser]
Parent=General Crawlers
Browser="Lincoln State Web Browser"
Stripper=true
isBanned=true

[Links4US-Crawler,*]
Parent=General Crawlers
Browser="Links4US-Crawler"
Stripper=true
isBanned=true

[Lorkyll *.* -- lorkyll@444.net]
Parent=General Crawlers
Browser="Lorkyll"
Stripper=true
isBanned=true

[Lsearch/sondeur]
Parent=General Crawlers
Browser="Lsearch/sondeur"
Stripper=true
isBanned=true

[MapoftheInternet.com?(?http://MapoftheInternet.com)]
Parent=General Crawlers
Browser="MapoftheInternet"
Stripper=true
isBanned=true

[Marvin v0.3]
Parent=General Crawlers
Browser="MedHunt"
Version=0.3
MajorVer=0
MinorVer=3

[masidani_bot_v0.6*]
Parent=General Crawlers
Browser="masidani_bot"

[Metaspinner/0.01 (Metaspinner; http://www.meta-spinner.de/; support@meta-spinner.de/)]
Parent=General Crawlers
Browser="Metaspinner/0.01"
Version=0.01
MajorVer=0
MinorVer=01

[metatagsdir/*]
Parent=General Crawlers
Browser="metatagsdir"
Stripper=true
isBanned=true

[Miva (AlgoFeedback@miva.com)]
Parent=General Crawlers
Browser="Miva"

[moget/*]
Parent=General Crawlers
Browser="Goo"

[Mozdex/0.7.2*]
Parent=General Crawlers
Browser="Mozdex"

[Mozilla Compatible (MS IE 3.01 WinNT)]
Parent=General Crawlers
Stripper=true
isBanned=true

[Mozilla/* (compatible; WebCapture*)]
Parent=General Crawlers
Browser="WebCapture"

[Mozilla/4.0 (compatible; DepSpid/*)]
Parent=General Crawlers
Browser="DepSpid"

[Mozilla/4.0 (compatible; MSIE 4.01; Vonna.com b o t)]
Parent=General Crawlers
Browser="Vonna.com"
Stripper=true
isBanned=true

[Mozilla/4.0 (compatible; MSIE 4.01; Windows95)]
Parent=General Crawlers
Win32=true

[Mozilla/4.0 (compatible; MSIE 4.5; Windows 98; )]
Parent=General Crawlers
Win32=true

[Mozilla/4.0 (compatible; MyFamilyBot/*)]
Parent=General Crawlers
Browser="MyFamilyBot"

[Mozilla/4.0 (compatible; N-Stealth)]
Parent=General Crawlers
Browser="N-Stealth"

[Mozilla/4.0 (compatible; Scumbot/*; Linux/*)]
Parent=General Crawlers
Stripper=true
isBanned=true

[Mozilla/4.0 (compatible; Spider; Linux)]
Parent=General Crawlers
Stripper=true
isBanned=true

[Mozilla/4.1]
Parent=General Crawlers
Stripper=true
isBanned=true

[Mozilla/4.5]
Parent=General Crawlers
Stripper=true
isBanned=true

[Mozilla/5.0 (compatible; AboutUsBot/*)]
Parent=General Crawlers
Browser="AboutUsBot"

[Mozilla/5.0 (compatible; BuzzRankingBot/*)]
Parent=General Crawlers
Browser="BuzzRankingBot"
Stripper=true
isBanned=true

[mozilla/5.0 (compatible; genevabot  http://www.healthdash.com)]
Parent=General Crawlers
Browser="Healthdash"

[Mozilla/5.0 (compatible; Kyluka crawl; http://www.kyluka.com/crawl.html; crawl@kyluka.com)]
Parent=General Crawlers
Browser="Kyluka"

[Mozilla/5.0 (compatible; Vermut*)]
Parent=General Crawlers
Browser="Vermut"

[Mozilla/5.0 (compatible; Webbot/*)]
Parent=General Crawlers
Browser="Webbot.ru"
Stripper=true
isBanned=true

[n4p_bot*]
Parent=General Crawlers
Browser="n4p_bot"

[nabot*]
Parent=General Crawlers
Browser="Nabot"

[NetCarta_WebMapper/*]
Parent=General Crawlers
Browser="NetCarta_WebMapper"
Stripper=true
isBanned=true

[neTVision AG andreas.heidoetting@thomson-webcast.net]
Parent=General Crawlers
Browser="neTVision"

[NextopiaBOT*]
Parent=General Crawlers
Browser="NextopiaBOT"

[nicebot]
Parent=General Crawlers
Browser="nicebot"
Stripper=true
isBanned=true

[niXXieBot?Foster*]
Parent=General Crawlers
Browser="niXXiebot-Foster"

[Nozilla/P.N (Just for IDS woring)]
Parent=General Crawlers
Browser="Nozilla/P.N"
Stripper=true
isBanned=true

[Nudelsalat/*]
Parent=General Crawlers
Browser="Nudelsalat"
Stripper=true
isBanned=true

[Ocelli/*]
Parent=General Crawlers
Browser="Ocelli"

[OpenTaggerBot (http://www.opentagger.com/opentaggerbot.htm)]
Parent=General Crawlers
Browser="OpenTaggerBot"

[Oracle Enterprise Search]
Parent=General Crawlers
Browser="Oracle Enterprise Search"
Stripper=true
isBanned=true

[Oracle Ultra Search]
Parent=General Crawlers
Browser="Oracle Ultra Search"

[Pajaczek/*]
Parent=General Crawlers
Browser="Pajaczek"
Stripper=true
isBanned=true

[panscient.com]
Parent=General Crawlers
Browser="panscient.com"
Stripper=true
isBanned=true

[Patwebbot (http://www.herz-power.de/technik.html)]
Parent=General Crawlers
Browser="Patwebbot"

[PhpDig/*]
Parent=General Crawlers
Browser="PhpDig"

[PlantyNet_WebRobot*]
Parent=General Crawlers
Browser="PlantyNet"
Stripper=true
isBanned=true

[PMAFind]
Parent=General Crawlers
Browser="PMAFind"
Stripper=true
isBanned=true

[Poodle_predictor_1.0]
Parent=General Crawlers
Browser="Poodle Predictor"

[QuickFinder Crawler]
Parent=General Crawlers
Browser="QuickFinder"
Stripper=true
isBanned=true

[Radiation Retriever*]
Parent=General Crawlers
Browser="Radiation Retriever"
Stripper=true
isBanned=true

[RedCarpet/*]
Parent=General Crawlers
Browser="RedCarpet"
Stripper=true
isBanned=true

[RixBot (http://babelserver.org/rix)]
Parent=General Crawlers
Browser="RixBot"

[SBIder/*]
Parent=General Crawlers
Browser="SiteSell"

[ScollSpider/2.*]
Parent=General Crawlers
Browser="ScollSpider"
Stripper=true
isBanned=true

[Search Fst]
Parent=General Crawlers
Browser="Search Fst"

[searchbot admin@google.com]
Parent=General Crawlers
Browser="searchbot"
Stripper=true
isBanned=true

[Seeker.lookseek.com]
Parent=General Crawlers
Browser="LookSeek"
Stripper=true
isBanned=true

[semanticdiscovery/*]
Parent=General Crawlers
Browser="Semantic Discovery"

[SeznamBot/*]
Parent=General Crawlers
Browser="SeznamBot"
Stripper=true
isBanned=true

[ShopWiki/1.0*]
Parent=General Crawlers
Browser="ShopWiki"
Version=1.0
MajorVer=1
MinorVer=0

[ShowXML/1.0 libwww/5.4.0]
Parent=General Crawlers
Browser="ShowXML"
Stripper=true
isBanned=true

[sitecheck.internetseer.com*]
Parent=General Crawlers
Browser="Internetseer"

[SMBot/*]
Parent=General Crawlers
Browser="SMBot"

[sohu*]
Parent=General Crawlers
Browser="sohu-search"
Stripper=true
isBanned=true

[SpankBot*]
Parent=General Crawlers
Browser="SpankBot"
Stripper=true
isBanned=true

[spider (tspyyp@tom.com)]
Parent=General Crawlers
Browser="spider (tspyyp@tom.com)"
Stripper=true
isBanned=true

[Sunrise/0.*]
Parent=General Crawlers
Browser="Sunrise"
Stripper=true
isBanned=true

[SurveyBot/*]
Parent=General Crawlers
Browser="SurveyBot"
Stripper=true
isBanned=true

[SynapticSearch/AI Crawler 1.?]
Parent=General Crawlers
Browser="SynapticSearch"
Stripper=true
isBanned=true

[SyncMgr]
Parent=General Crawlers
Browser="SyncMgr"

[Tagyu Agent/1.0]
Parent=General Crawlers
Browser="Tagyu"

[Talkro Web-Shot/*]
Parent=General Crawlers
Browser="Talkro Web-Shot"
Stripper=true
isBanned=true

[Tecomi Bot (http://www.tecomi.com/bot.htm)]
Parent=General Crawlers
Browser="Tecomi"

[TheInformant*]
Parent=General Crawlers
Browser="TheInformant"
Stripper=true
isBanned=true

[Tutorial Crawler*]
Parent=General Crawlers
Stripper=true
isBanned=true

[UbiCrawler/*]
Parent=General Crawlers
Browser="UbiCrawler"

[UCmore]
Parent=General Crawlers
Browser="UCmore"

[User*Agent:*]
Parent=General Crawlers
Stripper=true
isBanned=true

[VengaBot/*]
Parent=General Crawlers
Browser="VengaBot"
Stripper=true
isBanned=true

[Visicom Toolbar]
Parent=General Crawlers
Browser="Visicom Toolbar"

[W3C-WebCon/*]
Parent=General Crawlers
Browser="W3C-WebCon"

[Webclipping.com]
Parent=General Crawlers
Browser="Webclipping.com"
Stripper=true
isBanned=true

[WebCrawler_1.*]
Parent=General Crawlers
Browser="WebCrawler"

[WebFilter Robot*]
Parent=General Crawlers
Browser="WebFilter Robot"

[WeBoX/*]
Parent=General Crawlers
Browser="WeBoX"

[WebTrends/*]
Parent=General Crawlers
Browser="WebTrends"

[West Wind Internet Protocols*]
Parent=General Crawlers
Browser="Versatel"
Stripper=true
isBanned=true

[WhizBang]
Parent=General Crawlers
Browser="WhizBang"

[Willow Internet Crawler by Twotrees V*]
Parent=General Crawlers
Browser="Willow Internet Crawler"

[WIRE/* (Linux; i686; Bot,Robot,Spider,Crawler)]
Parent=General Crawlers
Browser="WIRE"
Stripper=true
isBanned=true

[www.fi crawler, contact crawler@www.fi]
Parent=General Crawlers
Browser="www.fi crawler"

[Xerka WebBot v1.*]
Parent=General Crawlers
Browser="Xerka"
Stripper=true
isBanned=true

[XML Sitemaps Generator*]
Parent=General Crawlers
Browser="XML Sitemaps Generator"

[XSpider*]
Parent=General Crawlers
Browser="XSpider"
Stripper=true
isBanned=true

[YooW!/* (?http://www.yoow.eu)]
Parent=General Crawlers
Browser="YooW!"
Stripper=true
isBanned=true

[FOTOCHECKER]
Parent=Image Crawlers
Browser="FOTOCHECKER"
Stripper=true
isBanned=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Search Engines

[Search Engines]
Parent=DefaultProperties
Browser="Search Engines"
Frames=true
Tables=true
Crawler=true

[*FDSE robot*]
Parent=Search Engines
Browser="FDSE Robot"

[*Fluffy the spider*]
Parent=Search Engines
Browser="SearchHippo"

[Abacho*]
Parent=Search Engines
Browser="Abacho"

[ah-ha.com crawler (crawler@ah-ha.com)]
Parent=Search Engines
Browser="Ah-Ha"

[AIBOT/*]
Parent=Search Engines
Browser="21Seek.Com"

[ALeadSoftbot/*]
Parent=Search Engines
Browser="ALeadSoftbot"

[Amfibibot/*]
Parent=Search Engines
Browser="Amfibi"

[AnswerBus (http://www.answerbus.com/)]
Parent=Search Engines

[antibot-V*]
Parent=Search Engines
Browser="antibot"

[appie*(www.walhello.com)]
Parent=Search Engines
Browser="Walhello"

[ASPSeek/*]
Parent=Search Engines
Browser="ASPSeek"

[BigCliqueBOT/*]
Parent=Search Engines
Browser="BigClique.com/BigClic.com"

[Blaiz-Bee/*]
Parent=Search Engines
Browser="RawGrunt"

[btbot/*]
Parent=Search Engines
Browser="Bit Torrent Search Engine"

[CipinetBot (http://www.cipinet.com/bot.html)]
Parent=Search Engines
Browser="CipinetBot"

[cosmos*]
Parent=Search Engines
Browser="Xyleme"

[Deepindex]
Parent=Search Engines
Browser="Deepindex"

[DiamondBot]
Parent=Search Engines
Browser="DiamondBot"

[Eule?Robot*]
Parent=Search Engines
Browser="Eule-Robot"

[Faxobot/*]
Parent=Search Engines
Browser="Faxo"

[Filangy/*]
Parent=Search Engines
Browser="Filangy"

[Fooky.com/ScorpionBot/ScoutOut;*]
Parent=Search Engines
Browser="ScorpionBot"
Stripper=true
isBanned=true

[FyberSpider*]
Parent=Search Engines
Browser="FyberSpider"
Stripper=true
isBanned=true

[gazz/*(gazz@nttr.co.jp)]
Parent=Search Engines
Browser="gazz"

[geniebot*]
Parent=Search Engines
Browser="GenieKnows"

[GOFORITBOT (?http://www.goforit.com/about/?)]
Parent=Search Engines
Browser="GoForIt"

[GoGuidesBot/*]
Parent=Search Engines
Browser="GoGuidesBot"

[GroschoBot/*]
Parent=Search Engines
Browser="GroschoBot"

[GurujiBot/1.*]
Parent=Search Engines
Browser="GurujiBot"
Stripper=true
isBanned=true

[HenryTheMiragoRobot*]
Parent=Search Engines
Browser="Mirago"

[Hotzonu/*]
Parent=Search Engines
Browser="Hotzonu"

[HyperEstraier/*]
Parent=Search Engines
Browser="HyperEstraier"
Stripper=true
isBanned=true

[i1searchbot/*]
Parent=Search Engines
Browser="i1searchbot"

[Iltrovatore-?etaccio/*]
Parent=Search Engines
Browser="Iltrovatore-Setaccio"

[InfociousBot (?http://corp.infocious.com/tech_crawler.php)]
Parent=Search Engines
Browser="InfociousBot"
Stripper=true
isBanned=true

[Infoseek SideWinder/*]
Parent=Search Engines
Browser="Infoseek"

[iSEEKbot/*]
Parent=Search Engines
Browser="iSEEKbot"

[Kolinka Forum Search (www.kolinka.com)]
Parent=Search Engines
Browser="Kolinka Forum Search"
Stripper=true
isBanned=true

[KRetrieve/]
Parent=Search Engines
Browser="KRetrieve"
Stripper=true
isBanned=true

[LapozzBot/*]
Parent=Search Engines
Browser="LapozzBot"

[Linknzbot*]
Parent=Search Engines
Browser="Linknzbot"

[LocalcomBot/*]
Parent=Search Engines
Browser="LocalcomBot"

[Mail.Ru/1.0]
Parent=Search Engines
Browser="Mail.Ru"

[MaSagool/*]
Parent=Search Engines
Browser="Sagoo"
Version=1.0
MajorVer=1
MinorVer=0

[miniRank/*]
Parent=Search Engines
Browser="miniRank"

[MJ12bot/*]
Parent=Search Engines
Browser="Majestic-12"

[Mnogosearch*]
Parent=Search Engines
Browser="Mnogosearch"

[Mozilla/4.0 (compatible; Arachmo)]
Parent=Search Engines
Browser="Arachmo"

[Mozilla/4.0 (compatible; MSIE *; Windows NT; Girafabot; girafabot at girafa dot com; http://www.girafa.com)]
Parent=Search Engines
Browser="Girafabot"
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.00; Windows 98]
Parent=Search Engines
Browser="directNIC"
Win32=true
Stripper=true
isBanned=true

[Mozilla/4.0(?compatible; MSIE 6.0; Qihoo *)]
Parent=Search Engines
Browser="Qihoo"

[Mozilla/4.7 (compatible; WhizBang; http://www.whizbang.com/crawler)]
Parent=Search Engines
Browser="Inxight Software"

[Mozilla/5.0 (*) VoilaBot BETA 1.*]
Parent=Search Engines
Browser="VoilaBot"
Stripper=true
isBanned=true

[Mozilla/5.0 (compatible; ActiveTouristBot*; http://www.activetourist.com)]
Parent=Search Engines
Browser="ActiveTouristBot"

[Mozilla/5.0 (compatible; Charlotte/1.0b; *)]
Parent=Search Engines
Browser="Charlotte"
Beta=true
Stripper=true
isBanned=true

[Mozilla/5.0 (compatible; CXL-FatAssANT (El Robeiro); http://www.conexcol.com/FatAssANT/; ANTid:alfa; v. 0.5.1)]
Parent=Search Engines
Browser="Conexcol.com"

[Mozilla/5.0 (compatible; EARTHCOM.info/*)]
Parent=Search Engines
Browser="EARTHCOM"

[Mozilla/5.0 (compatible; MojeekBot/2.0; http://www.mojeek.com/bot.html)]
Parent=Search Engines
Browser="MojeekBot"
Version=2.0
MajorVer=2
MinorVer=0

[Mozilla/5.0 (compatible; NLCrawler/*]
Parent=Search Engines
Browser="Northern Light Web Search"

[Mozilla/5.0 (compatible; OsO;*]
Parent=Search Engines
Browser="Octopodus"
Stripper=true
isBanned=true

[Mozilla/5.0 (compatible; Scrubby/*;  http://www.scrubtheweb.com/abs/meta-check.html)]
Parent=Search Engines
Browser="Scrubby"
Stripper=true
isBanned=true

[Mozilla/5.0 CostaCider Search*]
Parent=Search Engines
Browser="CostaCider Search"

[NavissoBot]
Parent=Search Engines
Browser="NavissoBot"

[Norbert the Spider(Burf.com)]
Parent=Search Engines
Browser="Norbert the Spider"

[NuSearch Spider*]
Parent=Search Engines
Browser="nuSearch"

[ObjectsSearch/*]
Parent=Search Engines
Browser="ObjectsSearch"

[OpenISearch/1.*]
Parent=Search Engines
Browser="OpenISearch (Amazon)"

[Pagebull http://www.pagebull.com/]
Parent=Search Engines
Browser="Pagebull"

[PEERbot*]
Parent=Search Engines
Browser="PEERbot"

[Pompos/*]
Parent=Search Engines
Browser="Pompos"

[Popdexter/*]
Parent=Search Engines
Browser="Popdex"

[Qweery*]
Parent=Search Engines
Browser="QweeryBot"

[RedCell/* (*)]
Parent=Search Engines
Browser="RedCell"

[Scrubby/*]
Parent=Search Engines
Browser="Scrub The Web"

[Search-10/*]
Parent=Search Engines
Browser="Search-10"

[search.ch*]
Parent=Search Engines
Browser="Swiss Search Engine"

[Searchmee! Spider*]
Parent=Search Engines
Browser="Searchmee!"

[Seekbot/*]
Parent=Search Engines
Browser="Seekbot"

[SiteSpider  (http://www.SiteSpider.com/)]
Parent=Search Engines
Browser="SiteSpider"

[Spinne/*]
Parent=Search Engines
Browser="Spinne"

[sproose/*]
Parent=Search Engines
Browser="Sproose"

[Sqeobot/0.*]
Parent=Search Engines
Browser="Branzel"
Stripper=true
isBanned=true

[SquigglebotBot/*]
Parent=Search Engines
Browser="SquigglebotBot"
Stripper=true
isBanned=true

[StackRambler/*]
Parent=Search Engines
Browser="StackRambler"

[SygolBot*]
Parent=Search Engines
Browser="SygolBot"

[SynoBot]
Parent=Search Engines
Browser="SynoBot"

[Szukacz/*]
Parent=Search Engines
Browser="Szukacz"

[Tarantula/*]
Parent=Search Engines
Browser="Tarantula"
Stripper=true
isBanned=true

[TerrawizBot/*]
Parent=Search Engines
Browser="TerrawizBot"
Stripper=true
isBanned=true

[Tkensaku/*]
Parent=Search Engines
Browser="Tkensaku"

[TMCrawler]
Parent=Search Engines
Browser="TMCrawler"
Stripper=true
isBanned=true

[updated/*]
Parent=Search Engines
Browser="Updated!"

[URL Spider Pro/*]
Parent=Search Engines
Browser="URL Spider Pro"

[URL Spider SQL*]
Parent=Search Engines
Browser="Innerprise Enterprise Search"

[VMBot/*]
Parent=Search Engines
Browser="VMBot"

[wadaino.jp-crawler*]
Parent=Search Engines
Browser="wadaino.jp"
Stripper=true
isBanned=true

[WebAlta Crawler/*]
Parent=Search Engines
Browser="WebAlta Crawler"
Stripper=true
isBanned=true

[WebCorp/*]
Parent=Search Engines
Browser="WebCorp"
Stripper=true
isBanned=true

[webcrawl.net]
Parent=Search Engines
Browser="webcrawl.net"

[WISEbot/*]
Parent=Search Engines
Browser="WISEbot"
Stripper=true
isBanned=true

[Wotbox/*]
Parent=Search Engines
Browser="Wotbox"

[www.zatka.com]
Parent=Search Engines
Browser="Zatka"

[WWWeasel Robot v*]
Parent=Search Engines
Browser="World Wide Weasel"

[YadowsCrawler*]
Parent=Search Engines
Browser="YadowsCrawler"

[YodaoBot/*]
Parent=Search Engines
Browser="YodaoBot"
Stripper=true
isBanned=true

[ZeBot_www.ze.bz*]
Parent=Search Engines
Browser="ZE.bz"

[zibber-v*]
Parent=Search Engines
Browser="Zibb"

[ZipppBot/*]
Parent=Search Engines
Browser="ZipppBot"

[ATA-Translation-Service]
Parent=Translators
Browser="ATA-Translation-Service"

[GJK_Browser_Check]
Parent=Version Checkers
Browser="GJK_Browser_Check"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; DYNAMIC

[DYNAMIC]
Parent=DefaultProperties
Browser="DYNAMIC"
Stripper=true
isBanned=true
Crawler=true

[DYNAMIC (*; http://www.dynamicplus.it; admin@dynamicplus.it)]
Parent=DYNAMIC
Browser="DYNAMIC+"

[Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; DYNAMIC*)]
Parent=DYNAMIC
Win32=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Hatena

[Hatena]
Parent=DefaultProperties
Browser="Hatena"
Stripper=true
isBanned=true
Crawler=true

[Feed::Find/0.*]
Parent=Hatena
Browser="Feed::Find"
isSyndicationReader=true

[Hatena Antenna/*]
Parent=Hatena
Browser="Hatena Antenna"

[Hatena Bookmark/*]
Parent=Hatena
Browser="Hatena Bookmark"

[Hatena RSS/*]
Parent=Hatena
Browser="Hatena RSS"
isSyndicationReader=true

[HatenaScreenshot/* (checker)]
Parent=Hatena
Browser="HatenaScreenshot"

[URI::Fetch/0.*]
Parent=Hatena
Browser="URI::Fetch"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Hurricane Electric

[Hurricane Electric]
Parent=DefaultProperties
Browser="Hurricane Electric"
Stripper=true
isBanned=true
Crawler=true

[Gigabot*]
Parent=Hurricane Electric

[GigabotSiteSearch/*]
Parent=Hurricane Electric
Browser="GigabotSiteSearch"

[Jetbot/*]
Parent=Hurricane Electric

[Mozilla/4.04 (compatible; Dulance bot;*)]
Parent=Hurricane Electric
Browser="Dulance"

[OmniExplorer_Bot/*]
Parent=Hurricane Electric
Browser="OmniExplorer"

[plinki/0.1*]
Parent=Hurricane Electric
Browser="plinki"

[Twiceler*]
Parent=Hurricane Electric
Browser="Twiceler"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; iaskspider

[iaskspider]
Parent=DefaultProperties
Browser="iaskspider"
Stripper=true
isBanned=true
Crawler=true

[iaskspider*]
Parent=iaskspider
Browser="iaskspider"
Stripper=true
isBanned=true

[Mozilla/5.0 (compatible; iaskspider/*; MSIE 6.0)]
Parent=iaskspider

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Internet Archive

[Internet Archive]
Parent=DefaultProperties
Browser="Internet Archive"
Frames=true
IFrames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[*heritrix*]
Parent=Internet Archive
Browser="Wayback Machine"
Stripper=true
isBanned=true

[ia_archiver*]
Parent=Internet Archive
Browser="Internet Archive"

[InternetArchive/*]
Parent=Internet Archive
Browser="InternetArchive"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Marty Anstey

[Marty Anstey]
Parent=DefaultProperties
Browser="Marty Anstey"
Stripper=true
isBanned=true
Crawler=true

[Helix/1.2 (?http://www.sitesearch.ca/helix/)]
Parent=Marty Anstey

[Mozilla/2.0 (compatible; DC9FE0029G; FreeBSD 5.4-RELEASE; i386; en_US)]
Parent=Marty Anstey

[Reaper/* (?http://www.sitesearch.ca/reaper)]
Parent=Marty Anstey
Browser="Reaper"

[Vortex/2.2*]
Parent=Marty Anstey
Browser="Vortex"
Stripper=true
isBanned=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Microsoft_Internet_Explorer

[Microsoft_Internet_Explorer]
Parent=DefaultProperties
Browser="Microsoft_Internet_Explorer"
Stripper=true
isBanned=true
Crawler=true

[Microsoft_Internet_Explorer_5.00.*]
Parent=Microsoft_Internet_Explorer
Stripper=true
isBanned=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Nutch

[Nutch]
Parent=DefaultProperties
Browser="Nutch"
Stripper=true
isBanned=true
Crawler=true

[*Nutch*]
Parent=Nutch
Stripper=true
isBanned=true

[CazoodleBot/*]
Parent=Nutch
Browser="CazoodleBot"

[LOOQ/0.1*]
Parent=Nutch
Browser="LOOQ"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Webaroo

[Webaroo]
Parent=DefaultProperties
Browser="Webaroo"

[PiyushBot (Piyush Web Miner;*)]
Parent=Webaroo
Browser="PiyushBot"

[PsBot (PsBot;*)]
Parent=Webaroo
Browser="PsBot"

[pulseBot (pulse Web Miner)]
Parent=Webaroo
Browser="pulseBot"

[RufusBot (Rufus Web Miner;*)]
Parent=Webaroo
Browser="RufusBot"

[SumeetBot (Sumeet Bot; *)]
Parent=Webaroo
Browser="SumeetBot"

[WebarooBot (Webaroo Bot;*)]
Parent=Webaroo
Browser="WebarooBot"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; WebCollage

[WebCollage]
Parent=DefaultProperties
Browser="WebCollage"
Stripper=true
isBanned=true
Crawler=true

[mywebcollage/*]
Parent=WebCollage

[webcollage*/*]
Parent=WebCollage
Browser="WebCollage"

[BlueCoat ProxySG]
Parent=Blue Coat Systems
Browser="BlueCoat ProxySG"

[CerberianDrtrs/*]
Parent=Blue Coat Systems
Browser="Cerberian"

[Inne: Mozilla/4.0 (compatible; Cerberian Drtrs*)]
Parent=Blue Coat Systems
Browser="Cerberian"

[Mozilla/4.0 (compatible; Cerberian Drtrs*)]
Parent=Blue Coat Systems
Browser="Cerberian"

[Mozilla/4.0 (compatible; MSIE 6.0; Bluecoat DRTR)]
Parent=Blue Coat Systems
Browser="Bluecoat"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Copyright/Plagiarism

[Copyright/Plagiarism]
Parent=DefaultProperties
Browser="Copyright/Plagiarism"
Stripper=true
isBanned=true
Crawler=true

[BDFetch]
Parent=Copyright/Plagiarism
Browser="BDFetch"

[CopyRightCheck*]
Parent=Copyright/Plagiarism
Browser="CopyRightCheck"

[FairAd Client*]
Parent=Copyright/Plagiarism
Browser="FairAd Client"

[IPiumBot laurion(dot)com]
Parent=Copyright/Plagiarism
Browser="IPiumBot"

[oBot]
Parent=Copyright/Plagiarism
Browser="oBot"

[SlySearch/*]
Parent=Copyright/Plagiarism
Browser="SlySearch"

[TurnitinBot/*]
Parent=Copyright/Plagiarism
Browser="TurnitinBot"

[TutorGigBot/*]
Parent=Copyright/Plagiarism
Browser="TutorGig"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; DNS Tools

[DNS Tools]
Parent=DefaultProperties
Browser="DNS Tools"
Crawler=true

[Domain Dossier utility*]
Parent=DNS Tools
Browser="Domain Dossier"

[Mozilla/5.0 (compatible; DNS-Digger/*)]
Parent=DNS Tools
Browser="DNS-Digger"

[Mozilla/5.0 (compatible; DNS-Digger/*)]
Parent=DNS Tools
Browser="DNS-Digger"

[OpenDNS Domain Crawler noc@opendns.com]
Parent=DNS Tools
Browser="OpenDNS Domain Crawler"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Download Managers

[Download Managers]
Parent=DefaultProperties
Browser="Download Managers"
Frames=true
IFrames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[AutoMate5]
Parent=Download Managers
Browser="AutoMate5"

[Beamer*]
Parent=Download Managers
Browser="Beamer"

[BitBeamer/*]
Parent=Download Managers
Browser="BitBeamer"

[BitTorrent/*]
Parent=Download Managers
Browser="BitTorrent"

[DA *]
Parent=Download Managers
Browser="Download Accelerator"

[Download Demon*]
Parent=Download Managers
Browser="Download Demon"

[Download Express*]
Parent=Download Managers
Browser="Download Express"

[Download Master*]
Parent=Download Managers
Browser="Download Master"

[Download Ninja*]
Parent=Download Managers
Browser="Download Ninja"

[Download Wonder*]
Parent=Download Managers
Browser="Download Wonder"

[DownloadSession*]
Parent=Download Managers
Browser="DownloadSession"

[EasyDL/*]
Parent=Download Managers
Browser="EasyDL"

[FDM 1.x]
Parent=Download Managers
Browser="Free Download Manager"

[FlashGet]
Parent=Download Managers
Browser="FlashGet"

[FreshDownload/*]
Parent=Download Managers
Browser="FreshDownload"

[GetRight/*]
Parent=Download Managers
Browser="GetRight"

[GetRightPro/*]
Parent=Download Managers
Browser="GetRightPro"

[GetSmart/*]
Parent=Download Managers
Browser="GetSmart"

[Go!Zilla*]
Parent=Download Managers
Browser="GoZilla"

[Gozilla/*]
Parent=Download Managers
Browser="Gozilla"

[Internet Ninja*]
Parent=Download Managers
Browser="Internet Ninja"

[Kontiki Client*]
Parent=Download Managers
Browser="Kontiki Client"

[lftp/3.2.1]
Parent=Download Managers
Browser="lftp"

[LightningDownload/*]
Parent=Download Managers
Browser="LightningDownload"

[LMQueueBot/*]
Parent=Download Managers
Browser="LMQueueBot"

[MetaProducts Download Express/*]
Parent=Download Managers
Browser="Download Express"

[Mozilla/4.0 (compatible; Getleft*)]
Parent=Download Managers
Browser="Getleft"

[Myzilla]
Parent=Download Managers
Browser="Myzilla"

[Net Vampire/*]
Parent=Download Managers
Browser="Net Vampire"

[Net_Vampire*]
Parent=Download Managers
Browser="Net_Vampire"

[NetAnts*]
Parent=Download Managers
Browser="NetAnts"

[NetPumper*]
Parent=Download Managers
Browser="NetPumper"

[NetSucker*]
Parent=Download Managers
Browser="NetSucker"

[NetZip Downloader*]
Parent=Download Managers
Browser="NetZip Downloader"

[NexTools WebAgent*]
Parent=Download Managers
Browser="NexTools WebAgent"

[Offline Downloader*]
Parent=Download Managers
Browser="Offline Downloader"

[P3P Client]
Parent=Download Managers
Browser="P3P Client"

[PageDown*]
Parent=Download Managers
Browser="PageDown"

[PicaLoader*]
Parent=Download Managers
Browser="PicaLoader"

[Prozilla*]
Parent=Download Managers
Browser="Prozilla"

[RealDownload/*]
Parent=Download Managers
Browser="RealDownload"

[sEasyDL/*]
Parent=Download Managers
Browser="EasyDL"

[shareaza*]
Parent=Download Managers
Browser="shareaza"

[SmartDownload/*]
Parent=Download Managers
Browser="SmartDownload"

[SpeedDownload/*]
Parent=Download Managers
Browser="Speed Download"

[Star*Downloader/*]
Parent=Download Managers
Browser="StarDownloader"

[STEROID Download]
Parent=Download Managers
Browser="STEROID Download"

[SuperBot/*]
Parent=Download Managers
Browser="SuperBot"

[Vegas95/*]
Parent=Download Managers
Browser="Vegas95"

[WebZIP*]
Parent=Download Managers
Browser="WebZIP"

[Wget*]
Parent=Download Managers
Browser="Wget"

[WinTools]
Parent=Download Managers
Browser="WinTools"

[Xaldon WebSpider*]
Parent=Download Managers
Browser="Xaldon WebSpider"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; E-Mail Harvesters

[E-Mail Harvesters]
Parent=DefaultProperties
Browser="E-Mail Harvesters"
Frames=true
IFrames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[*E-Mail Address Extractor*]
Parent=E-Mail Harvesters
Browser="E-Mail Address Extractor"

[*Larbin*]
Parent=E-Mail Harvesters
Browser="Larbin"

[*www4mail/*]
Parent=E-Mail Harvesters
Browser="www4mail"

[8484 Boston Project*]
Parent=E-Mail Harvesters
Browser="8484 Boston Project"

[CherryPicker*/*]
Parent=E-Mail Harvesters
Browser="CherryPickerElite"

[Chilkat/*]
Parent=E-Mail Harvesters
Browser="Chilkat"

[ContactBot/*]
Parent=E-Mail Harvesters
Browser="ContactBot"

[eCatch*]
Parent=E-Mail Harvesters
Browser="eCatch"

[EmailCollector*]
Parent=E-Mail Harvesters
Browser="E-Mail Collector"

[EMAILsearcher]
Parent=E-Mail Harvesters
Browser="EMAILsearcher"

[EmailSiphon*]
Parent=E-Mail Harvesters
Browser="E-Mail Siphon"

[EmailWolf*]
Parent=E-Mail Harvesters
Browser="EMailWolf"

[Epsilon SoftWorks' MailMunky]
Parent=E-Mail Harvesters
Browser="MailMunky"

[EVE-minibrowser/*]
Parent=E-Mail Harvesters
Browser="EVE-minibrowser"

[ExtractorPro*]
Parent=E-Mail Harvesters
Browser="ExtractorPro"

[Franklin Locator*]
Parent=E-Mail Harvesters
Browser="Franklin Locator"

[Missigua Locator*]
Parent=E-Mail Harvesters
Browser="Missigua Locator"

[Mozilla/4.0 (compatible; Advanced Email Extractor*)]
Parent=E-Mail Harvesters
Browser="Advanced Email Extractor"

[Netprospector*]
Parent=E-Mail Harvesters
Browser="Netprospector"

[ProWebWalker*]
Parent=E-Mail Harvesters
Browser="ProWebWalker"

[sna-0.0.*]
Parent=E-Mail Harvesters
Browser="Mike Elliott's E-Mail Harvester"

[WebEnhancer*]
Parent=E-Mail Harvesters
Browser="WebEnhancer"

[WebMiner*]
Parent=E-Mail Harvesters
Browser="WebMiner"

[ZIBB Crawler (email address / WWW address)]
Parent=E-Mail Harvesters
Browser="ZIBB Crawler"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Feeds Blogs

[Feeds Blogs]
Parent=DefaultProperties
Browser="Feeds Blogs"
isSyndicationReader=true
Crawler=true

[Bloglines Title Fetch/*]
Parent=Feeds Blogs
Browser="Bloglines Title Fetch"

[Bloglines/* (http://www.bloglines.com*)]
Parent=Feeds Blogs
Browser="BlogLines Web"

[blogsearchbot-pumpkin-2]
Parent=Feeds Blogs
Browser="blogsearchbot-pumpkin"
isSyndicationReader=false

[Irish Blogs Aggregator/*1.0*]
Parent=Feeds Blogs
Browser="Irish Blogs Aggregator"
Version=1.0
MajorVer=1
MinorVer=0

[kinjabot (http://www.kinja.com; *)]
Parent=Feeds Blogs
Browser="kinjabot"

[Net::Trackback/*]
Parent=Feeds Blogs
Browser="Net::Trackback"

[Reblog*]
Parent=Feeds Blogs
Browser="Reblog"

[WordPress/*]
Parent=Feeds Blogs
Browser="WordPress"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Feeds Syndicators

[Feeds Syndicators]
Parent=DefaultProperties
Browser="Feeds Syndicators"
isSyndicationReader=true

[*LinkLint*]
Parent=Feeds Syndicators
Browser="LinkLint"

[*NetNewsWire/*]
Parent=Feeds Syndicators

[*NetVisualize*]
Parent=Feeds Syndicators
Browser="NetVisualize"

[Akregator/*]
Parent=Feeds Syndicators
Browser="Akregator"

[AppleSyndication/*]
Parent=Feeds Syndicators
Browser="Safari RSS"
Platform=MacOSX

[Cocoal.icio.us/* (*)*]
Parent=Feeds Syndicators
Browser="Cocoal.icio.us"
Stripper=true
isBanned=true

[Feed43 Proxy/* (*)]
Parent=Feeds Syndicators
Browser="Feed For Free"

[FeedDemon/* (*)]
Parent=Feeds Syndicators
Browser="FeedDemon"
Platform=Win32

[FeedDigest/* (*)]
Parent=Feeds Syndicators
Browser="FeedDigest"

[Feedreader * (Powered by Newsbrain)]
Parent=Feeds Syndicators
Browser="Newsbrain"

[Feedshow/* (*)]
Parent=Feeds Syndicators
Browser="Feedshow"

[GreatNews/1.0]
Parent=Feeds Syndicators
Browser="GreatNews"
Version=1.0
MajorVer=1
MinorVer=0

[Gregarius/*]
Parent=Feeds Syndicators
Browser="Gregarius"

[intraVnews/*]
Parent=Feeds Syndicators
Browser="intraVnews"

[JetBrains Omea Reader*]
Parent=Feeds Syndicators
Browser="Omea Reader"
Stripper=true
isBanned=true

[MagpieRSS/* (*)]
Parent=Feeds Syndicators
Browser="MagpieRSS"

[Mozilla/5.0 (*; Rojo *; http://www.rojo.com/corporate/help/agg; *)*]
Parent=Feeds Syndicators
Browser="Rojo"

[Mozilla/5.0 (*aggregator:TailRank; http://tailrank.com/robot)*]
Parent=Feeds Syndicators
Browser="TailRank"

[Mozilla/5.0 (compatible; MSIE 6.0; Podtech Network; crawler_admin@podtech.net)]
Parent=Feeds Syndicators
Browser="Podtech Network"

[Mozilla/5.0 (compatible; newstin.com;*)]
Parent=Feeds Syndicators
Browser="NewsTin"

[Mozilla/5.0 (compatible; Newz Crawler *; http://www.newzcrawler.com/?)]
Parent=Feeds Syndicators
Browser="Newz Crawler"

[Mozilla/5.0 (RSS Reader Panel)]
Parent=Feeds Syndicators
Browser="RSS Reader Panel"

[Mozilla/5.0 (X11; U; Linux*; *; rv:1.*; aggregator:FeedParser; *) Gecko/*]
Parent=Feeds Syndicators
Browser="FeedParser"

[Mozilla/5.0 (X11; U; Linux*; *; rv:1.*; aggregator:NewsMonster; *) Gecko/*]
Parent=Feeds Syndicators
Browser="NewsMonster"

[Mozilla/5.0 (X11; U; Linux*; *; rv:1.*; aggregator:Rojo; *) Gecko/*]
Parent=Feeds Syndicators
Browser="Rojo"

[Mozilla/6.0 (MSIE 6.0; *RSSMicro.com RSS/Atom Feed Robot)]
Parent=Feeds Syndicators
Browser="RSS Micro"

[Netvibes (*)]
Parent=Feeds Syndicators
Browser="Netvibes"

[NewsAlloy/* (*)]
Parent=Feeds Syndicators
Browser="NewsAlloy"

[Omnipelagos*]
Parent=Feeds Syndicators
Browser="Omnipelagos"

[Protopage/* (*)]
Parent=Feeds Syndicators
Browser="Protopage"

[PubSub-RSS-Reader/* (*)]
Parent=Feeds Syndicators
Browser="PubSub-RSS-Reader"

[RssBandit/*]
Parent=Feeds Syndicators
Browser="RssBandit"

[RssBar/1.2*]
Parent=Feeds Syndicators
Browser="RssBar"
Version=1.2
MajorVer=1
MinorVer=2

[SharpReader/*]
Parent=Feeds Syndicators
Browser="SharpReader"

[SimplePie/*]
Parent=Feeds Syndicators
Browser="SimplePie"

[Strategic Board Bot (?http://www.strategicboard.com)]
Parent=Feeds Syndicators
Browser="Strategic Board Bot"
Stripper=true
isBanned=true

[TargetYourNews.com bot]
Parent=Feeds Syndicators
Browser="TargetYourNews"

[Windows-RSS-Platform/1.0*]
Parent=Feeds Syndicators
Browser="Windows-RSS-Platform"
Version=1.0
MajorVer=1
MinorVer=0
Win32=true

[Wizz RSS News Reader]
Parent=Feeds Syndicators
Browser="Wizz"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; General RSS

[General RSS]
Parent=DefaultProperties
Browser="General RSS"

[Mozilla/5.0 (compatible) GM RSS Panel]
Parent=General RSS
Browser="RSS Panel"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Validation Checkers

[HTML Validators]
Parent=DefaultProperties
Browser="HTML Validators"
Frames=true
IFrames=true
Tables=true
Crawler=true

[(HTML Validator http://www.searchengineworld.com/validator/)]
Parent=HTML Validators
Browser="Search Engine World HTML Validator"

[FeedValidator/1.3]
Parent=HTML Validators
Browser="FeedValidator"
Version=1.3
MajorVer=1
MinorVer=3

[Jigsaw/* W3C_CSS_Validator_JFouffa/*]
Parent=HTML Validators
Browser="Jigsaw CSS Validator"

[Search Engine World Robots.txt Validator*]
Parent=HTML Validators
Browser="Search Engine World Robots.txt Validator"

[W3C_Validator/*]
Parent=HTML Validators
Browser="W3C Validator"

[W3CLineMode/*]
Parent=HTML Validators
Browser="W3C Line Mode"

[Weblide/2.0 beta8*]
Parent=HTML Validators
Browser="Weblide"
Version=2.0
MajorVer=2
MinorVer=0
Beta=true

[WebmasterWorld StickyMail Server Header Checker*]
Parent=HTML Validators
Browser="WebmasterWorld Server Header Checker"

[WWWC/*]
Parent=HTML Validators

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Image Crawlers

[Image Crawlers]
Parent=DefaultProperties
Browser="Image Crawlers"
Frames=true
IFrames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[*PhotoStickies/*]
Parent=Image Crawlers
Browser="PhotoStickies"

[Camcrawler*]
Parent=Image Crawlers
Browser="Camcrawler"

[Der gro\xdfe BilderSauger*]
Parent=Image Crawlers
Browser="Gallery Grabber"

[Extreme Picture Finder]
Parent=Image Crawlers
Browser="Extreme Picture Finder"

[FLATARTS_FAVICO]
Parent=Image Crawlers
Browser="FlatArts Favorites Icon Tool"

[HTML2JPG Blackbox, http://www.html2jpg.com]
Parent=Image Crawlers
Browser="HTML2JPG"

[IconSurf/2.*]
Parent=Image Crawlers
Browser="IconSurf"

[Mister PIX*]
Parent=Image Crawlers
Browser="Mister PIX"

[naoFavicon4IE*]
Parent=Image Crawlers
Browser="naoFavicon4IE"

[pixfinder/*]
Parent=Image Crawlers
Browser="pixfinder"

[rssImagesBot/0.1 (*http://herbert.groot.jebbink.nl/?app=rssImages)]
Parent=Image Crawlers
Browser="rssImagesBot"

[Web Image Collector*]
Parent=Image Crawlers
Browser="Web Image Collector"

[WebPix*]
Parent=Image Crawlers
Browser="Custo"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Link Checkers

[Link Checkers]
Parent=DefaultProperties
Browser="Link Checkers"
Frames=true
IFrames=true
Tables=true
Crawler=true

[!Susie (http://www.sync2it.com/susie)]
Parent=Link Checkers
Browser="!Susie"

[*AgentName/*]
Parent=Link Checkers
Browser="AgentName"

[*Linkman*]
Parent=Link Checkers
Browser="Linkman"

[*LinksManager.com*]
Parent=Link Checkers
Browser="LinksManager"

[*Powermarks/*]
Parent=Link Checkers
Browser="Powermarks"

[*W3C-checklink/*]
Parent=Link Checkers
Browser="W3C Link Checker"

[*Web Link Validator*]
Parent=Link Checkers
Browser="Web Link Validator"

[*Zeus*]
Parent=Link Checkers
Browser="Zeus"
Stripper=true
isBanned=true

[ActiveBookmark *]
Parent=Link Checkers
Browser="ActiveBookmark"

[Bookdog/*]
Parent=Link Checkers
Browser="Bookdog"

[Bookmark Buddy*]
Parent=Link Checkers
Browser="Bookmark Buddy"

[Bookmark Renewal Check Agent*]
Parent=Link Checkers
Browser="Bookmark Renewal Check Agent"

[Bookmark search tool*]
Parent=Link Checkers
Browser="Bookmark search tool"

[Bookmark-Manager]
Parent=Link Checkers
Browser="Bookmark-Manager"

[Checkbot*]
Parent=Link Checkers
Browser="Checkbot"

[CheckLinks/*]
Parent=Link Checkers
Browser="CheckLinks"

[CyberSpyder Link Test/*]
Parent=Link Checkers
Browser="CyberSpyder Link Test"

[DLC/*]
Parent=Link Checkers
Browser="DLC"

[DocWeb Link Crawler (http://doc.php.net)]
Parent=Link Checkers
Browser="DocWeb Link Crawler"

[FavOrg]
Parent=Link Checkers
Browser="FavOrg"

[Favorites Sweeper v.3.*]
Parent=Link Checkers
Browser="Favorites Sweeper"

[FindLinks/*]
Parent=Link Checkers
Browser="FindLinks"

[Funnel Web Profiler*]
Parent=Link Checkers
Browser="Funnel Web Profiler"

[Html Link Validator (www.lithopssoft.com)]
Parent=Link Checkers
Browser="HTML Link Validator"

[IECheck]
Parent=Link Checkers
Browser="IECheck"

[JCheckLinks/*]
Parent=Link Checkers
Browser="JCheckLinks"

[JRTwine Software Check Favorites Utility]
Parent=Link Checkers
Browser="JRTwine"

[Link Valet Online*]
Parent=Link Checkers
Browser="Link Valet"
Stripper=true
isBanned=true

[LinkAlarm/*]
Parent=Link Checkers
Browser="LinkAlarm"

[Linkbot*]
Parent=Link Checkers
Browser="Linkbot"

[LinkChecker/*]
Parent=Link Checkers
Browser="LinkChecker"

[LinkextractorPro*]
Parent=Link Checkers
Browser="LinkextractorPro"
Stripper=true
isBanned=true

[LinkLint-checkonly/*]
Parent=Link Checkers
Browser="LinkLint"

[LinkScan/*]
Parent=Link Checkers
Browser="LinkScan"

[LinkSweeper/*]
Parent=Link Checkers
Browser="LinkSweeper"

[LinkWalker*]
Parent=Link Checkers
Browser="LinkWalker"

[MetaGer-LinkChecker]
Parent=Link Checkers
Browser="MetaGer-LinkChecker"

[Mozilla/* (compatible; linktiger/*; *http://www.linktiger.com*)]
Parent=Link Checkers
Browser="LinkTiger"
Stripper=true
isBanned=true

[Mozilla/4.0 (Compatible); URLBase*]
Parent=Link Checkers
Browser="URLBase"

[Mozilla/4.0 (compatible; Link Utility; http://net-promoter.com)]
Parent=Link Checkers
Browser="NetPromoter Link Utility"

[Mozilla/4.0 (compatible; MSIE 6.0; Windows 98) Web Link Validator*]
Parent=Link Checkers
Browser="Web Link Validator"
Win32=true

[Mozilla/4.0 (compatible; MSIE 7.0; Win32) Link Commander 3.0]
Parent=Link Checkers
Browser="Link Commander"
Version=3.0
MajorVer=3
MinorVer=0
Platform=Win32

[Mozilla/4.0 (compatible; SuperCleaner*;*)]
Parent=Link Checkers
Browser="SuperCleaner"

[Mozilla/5.0 gURLChecker/*]
Parent=Link Checkers
Browser="gURLChecker"
Stripper=true
isBanned=true

[Newsgroupreporter LinkCheck]
Parent=Link Checkers
Browser="Newsgroupreporter LinkCheck"

[onCHECK Linkchecker von www.scientec.de fuer www.onsinn.de]
Parent=Link Checkers
Browser="onCHECK Linkchecker"

[online link validator (http://www.dead-links.com/)]
Parent=Link Checkers
Browser="Dead-Links.com"
Stripper=true
isBanned=true

[REL Link Checker*]
Parent=Link Checkers
Browser="REL Link Checker"

[RLinkCheker*]
Parent=Link Checkers
Browser="RLinkCheker"

[Robozilla/*]
Parent=Link Checkers
Browser="Robozilla"

[RPT-HTTPClient/*]
Parent=Link Checkers
Browser="RPT-HTTPClient"
Stripper=true
isBanned=true

[SafariBookmarkChecker*(?http://www.coriolis.ch/)]
Parent=Link Checkers
Browser="SafariBookmarkChecker"
Platform=MacOSX
CSS=2
CssVersion=2
supportsCSS=true

[Simpy/* (Simpy; http://www.simpy.com/?ref=bot; feedback at simpy dot com)]
Parent=Link Checkers
Browser="Simpy"

[SiteBar/*]
Parent=Link Checkers
Browser="SiteBar"

[Susie (http://www.sync2it.com/bms/susie.php]
Parent=Link Checkers
Browser="Susie"

[URLBase/6.*]
Parent=Link Checkers

[VSE/*]
Parent=Link Checkers
Browser="VSE Link Tester"

[WebTrends Link Analyzer]
Parent=Link Checkers
Browser="WebTrends Link Analyzer"

[WorQmada/*]
Parent=Link Checkers
Browser="WorQmada"

[Xenu* Link Sleuth*]
Parent=Link Checkers
Browser="Xenu's Link Sleuth"
Stripper=true
isBanned=true

[Z-Add Link Checker*]
Parent=Link Checkers
Browser="Z-Add Link Checker"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Microsoft

[Microsoft]
Parent=DefaultProperties
Browser="Microsoft"
Stripper=true
isBanned=true

[Live (http://www.live.com/)]
Parent=Microsoft
Browser="Microsoft Live"
Stripper=false
isBanned=false
isSyndicationReader=true

[MFC Foundation Class Library*]
Parent=Microsoft
Browser="MFC Foundation Class Library"

[MFHttpScan]
Parent=Microsoft
Browser="MFHttpScan"

[Microsoft BITS/*]
Parent=Microsoft
Browser="BITS"

[Microsoft Data Access Internet Publishing Provider Cache Manager]
Parent=Microsoft
Browser="MS IPP"

[Microsoft Data Access Internet Publishing Provider DAV*]
Parent=Microsoft
Browser="MS IPP DAV"

[Microsoft Data Access Internet Publishing Provider Protocol Discovery]
Parent=Microsoft
Browser="MS IPPPD"

[Microsoft Internet Explorer]
Parent=Microsoft
Browser="Fake IE"

[Microsoft Office Existence Discovery]
Parent=Microsoft
Browser="Microsoft Office Existence Discovery"

[Microsoft Office Protocol Discovery]
Parent=Microsoft
Browser="MS OPD"

[Microsoft Office/* (*Picture Manager*)]
Parent=Microsoft
Browser="Microsoft Office Picture Manager"

[Microsoft URL Control*]
Parent=Microsoft
Browser="Microsoft URL Control"

[Microsoft Visio MSIE]
Parent=Microsoft
Browser="Microsoft Visio"

[Microsoft-WebDAV-MiniRedir/*]
Parent=Microsoft
Browser="Microsoft-WebDAV"

[MSN Feed Manager]
Parent=Microsoft
Browser="MSN Feed Manager"
Stripper=false
isBanned=false
isSyndicationReader=true

[MSProxy/*]
Parent=Microsoft
Browser="MS Proxy"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Miscellaneous Browsers

[Miscellaneous Browsers]
Parent=DefaultProperties
Browser="Miscellaneous Browsers"
Frames=true
Tables=true
Cookies=true

[*Amiga*]
Parent=Miscellaneous Browsers
Browser="Amiga"
Platform=Amiga

[*avantbrowser*]
Parent=Miscellaneous Browsers
Browser="Avant Browser"

[Ace Explorer]
Parent=Miscellaneous Browsers
Browser="Ace Explorer"

[Enigma Browser*]
Parent=Miscellaneous Browsers
Browser="Enigma Browser"

[Godzilla/* (Basic*; *; Commodore C=64; *; rv:1.*)*]
Parent=Miscellaneous Browsers
Browser="Godzilla"

[GreenBrowser]
Parent=Miscellaneous Browsers
Browser="GreenBrowser"
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
CSS=2
CssVersion=2
supportsCSS=true

[Kopiczek/* (WyderOS*; *)]
Parent=Miscellaneous Browsers
Browser="Kopiczek"
Platform=WyderOS
IFrames=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/* (Win32;*Escape?*; ?)]
Parent=Miscellaneous Browsers
Browser="Escape"
Platform=Win32

[Mozilla/4.0 (compatible; ibisBrowser)]
Parent=Miscellaneous Browsers
Browser="ibisBrowser"

[Mozilla/5.0 (Macintosh; ?; PPC Mac OS X;*) AppleWebKit/* (*) HistoryHound/*]
Parent=Miscellaneous Browsers
Browser="HistoryHound"

[NetRecorder*]
Parent=Miscellaneous Browsers
Browser="NetRecorder"

[NetSurfer*]
Parent=Miscellaneous Browsers
Browser="NetSurfer"

[ogeb browser , Version 1.1.0]
Parent=Miscellaneous Browsers
Browser="ogeb browser"
Version=1.1
MajorVer=1
MinorVer=1

[SCEJ PSP BROWSER 0102pspNavigator]
Parent=Miscellaneous Browsers
Browser="Wipeout Pure"

[Sleipnir*]
Parent=Miscellaneous Browsers
Browser="Sleipnir"

[SlimBrowser]
Parent=Miscellaneous Browsers
Browser="SlimBrowser"

[WWW_Browser/*]
Parent=Miscellaneous Browsers
Browser="WWW Browser"
Version=1.69
MajorVer=1
MinorVer=69
Platform=Win16
CSS=3
CssVersion=3
supportsCSS=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Offline Browsers

[Offline Browsers]
Parent=DefaultProperties
Browser="Offline Browsers"
Frames=true
Tables=true
Cookies=true
Stripper=true
isBanned=true
Crawler=true

[*Check&Get*]
Parent=Offline Browsers
Browser="Check&Get"

[*HTTrack*]
Parent=Offline Browsers
Browser="HTTrack"

[*MSIECrawler*]
Parent=Offline Browsers
Browser="IE Offline Browser"

[*TweakMASTER*]
Parent=Offline Browsers
Browser="TweakMASTER"

[BackStreet Browser *]
Parent=Offline Browsers
Browser="BackStreet Browser"

[Go-Ahead-Got-It*]
Parent=Offline Browsers
Browser="Go Ahead Got-It"

[iGetter/*]
Parent=Offline Browsers
Browser="iGetter"

[Teleport*]
Parent=Offline Browsers
Browser="Teleport"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Online Scanners

[Online Scanners]
Parent=DefaultProperties
Browser="Online Scanners"
Stripper=true
isBanned=true

[Morfeus Fucking Scanner]
Parent=Online Scanners
Browser="Morfeus Fucking Scanner"

[Mozilla/4.0 (compatible; Trend Micro tmdr 1.*]
Parent=Online Scanners
Browser="Trend Micro"

[Titanium 2005 (4.02.01)]
Parent=Online Scanners
Browser="Panda Antivirus Titanium"

[virus_detector*]
Parent=Online Scanners
Browser="Secure Computing Corporation"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Proxy Servers

[Proxy Servers]
Parent=DefaultProperties
Browser="Proxy Servers"
Stripper=true
isBanned=true

[*squid*]
Parent=Proxy Servers
Browser="Squid"

[Anonymisiert*]
Parent=Proxy Servers
Browser="Anonymizied"

[Anonymizer/*]
Parent=Proxy Servers
Browser="Anonymizer"

[Anonymizied*]
Parent=Proxy Servers
Browser="Anonymizied"

[Anonymous*]
Parent=Proxy Servers
Browser="Anonymous"

[Anonymous/*]
Parent=Proxy Servers
Browser="Anonymous"

[CE-Preload]
Parent=Proxy Servers
Browser="CE-Preload"

[http://Anonymouse.org/*]
Parent=Proxy Servers
Browser="Anonymouse"

[IE/6.01 (CP/M; 8-bit*)]
Parent=Proxy Servers
Browser="Squid"

[Mozilla/* (TuringOS; Turing Machine; 0.0)]
Parent=Proxy Servers
Browser="Anonymizer"

[Mozilla/4.0 (compatible; MSIE ?.0; SaferSurf*)]
Parent=Proxy Servers
Browser="SaferSurf"

[Mozilla/5.0 (compatible; del.icio.us-thumbnails/*; *) KHTML/* (like Gecko)]
Parent=Proxy Servers
Browser="Yahoo!"
Stripper=true
isBanned=true
Crawler=true

[Nutscrape]
Parent=Proxy Servers
Browser="Squid"

[Nutscrape/* (CP/M; 8-bit*)]
Parent=Proxy Servers
Browser="Squid"

[Privoxy/*]
Parent=Proxy Servers
Browser="Privoxy"

[ProxyTester*]
Parent=Proxy Servers
Browser="ProxyTester"
Stripper=true
isBanned=true
Crawler=true

[SilentSurf*]
Parent=Proxy Servers
Browser="SilentSurf"

[Space*Bison/*]
Parent=Proxy Servers
Browser="Proxomitron"

[Sqworm/*]
Parent=Proxy Servers
Browser="Websense"

[SurfControl]
Parent=Proxy Servers
Browser="SurfControl"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Research Projects

[Research Projects]
Parent=DefaultProperties
Browser="Research Projects"
Stripper=true
isBanned=true
Crawler=true

[*research*]
Parent=Research Projects

[AcadiaUniversityWebCensusClient]
Parent=Research Projects
Browser="AcadiaUniversityWebCensusClient"

[Amico Alpha * (*) Gecko/* AmicoAlpha/*]
Parent=Research Projects
Browser="Amico Alpha"

[annotate_google; http://ponderer.org/*]
Parent=Research Projects
Browser="Annotate Google"

[CMS crawler (?http://buytaert.net/crawler/)]
Parent=Research Projects

[e-SocietyRobot(http://www.yama.info.waseda.ac.jp/~yamana/es/)]
Parent=Research Projects
Browser="e-SocietyRobot"

[Forschungsportal/*]
Parent=Research Projects
Browser="Forschungsportal"

[Gulper Web *]
Parent=Research Projects
Browser="Gulper Web Bot"

[HooWWWer/*]
Parent=Research Projects
Browser="HooWWWer"

[http://buytaert.net/crawler]
Parent=Research Projects

[inetbot/* (?http://www.inetbot.com/bot.html)]
Parent=Research Projects
Browser="inetbot"

[IRLbot/*]
Parent=Research Projects
Browser="IRLbot"

[Lachesis]
Parent=Research Projects
Browser="Lachesis"

[Mozilla/5.0 (compatible; nextthing.org/*)]
Parent=Research Projects
Browser="nextthing.org"
Version=1.0
MajorVer=1
MinorVer=0

[Mozilla/5.0 (compatible; Theophrastus/*)]
Parent=Research Projects
Browser="Theophrastus"

[MQbot*]
Parent=Research Projects
Browser="MQbot"

[OutfoxBot/*]
Parent=Research Projects
Browser="OutfoxBot"

[polybot?*]
Parent=Research Projects
Browser="Polybot"

[Shim?Crawler*]
Parent=Research Projects
Browser="Shim Crawler"

[Steeler/*]
Parent=Research Projects
Browser="Steeler"

[Taiga web spider]
Parent=Research Projects
Browser="Taiga"

[Theme Spider*]
Parent=Research Projects
Browser="Theme Spider"

[UofTDB_experiment* (leehyun@cs.toronto.edu)]
Parent=Research Projects
Browser="UofTDB Experiment"

[USyd-NLP-Spider*]
Parent=Research Projects
Browser="USyd-NLP-Spider"

[wwwster/* (Beta, mailto:gue@cis.uni-muenchen.de)]
Parent=Research Projects
Browser="wwwster"
Beta=true

[Zao-Crawler]
Parent=Research Projects
Browser="Zao-Crawler"

[Zao/*]
Parent=Research Projects
Browser="Zao"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Rippers

[Rippers]
Parent=DefaultProperties
Browser="Rippers"
Frames=true
IFrames=true
Tables=true
Stripper=true
isBanned=true
Crawler=true

[*grub-client*]
Parent=Rippers
Browser="grub-client"

[*ickHTTP*]
Parent=Rippers
Browser="IP*Works"

[*java*]
Parent=Rippers

[*libwww-perl*]
Parent=Rippers
Browser="libwww-perl"

[*WebGrabber*]
Parent=Rippers

[*WinHttpRequest*]
Parent=Rippers
Browser="WinHttp"

[3D-FTP/*]
Parent=Rippers
Browser="3D-FTP"

[3wGet/*]
Parent=Rippers
Browser="3wGet"

[ActiveRefresh*]
Parent=Rippers
Browser="ActiveRefresh"

[Artera (Version *)]
Parent=Rippers
Browser="Artera"

[AutoHotkey]
Parent=Rippers
Browser="AutoHotkey"

[b2w/*]
Parent=Rippers
Browser="b2w"

[BasicHTTP/*]
Parent=Rippers
Browser="BasicHTTP"

[BlockNote.Net]
Parent=Rippers
Browser="BlockNote.Net"

[CAST]
Parent=Rippers
Browser="CAST"

[CFNetwork/*]
Parent=Rippers
Browser="CFNetwork"

[CFSCHEDULE*]
Parent=Rippers
Browser="ColdFusion Task Scheduler"

[CobWeb/*]
Parent=Rippers
Browser="CobWeb"

[ColdFusion*]
Parent=Rippers
Browser="ColdFusion"

[Crawl_Application]
Parent=Rippers
Browser="Crawl_Application"

[curl/*]
Parent=Rippers
Browser="cURL"

[Custo*]
Parent=Rippers
Browser="Custo"

[DataCha0s/*]
Parent=Rippers
Browser="DataCha0s"

[DeepIndexer*]
Parent=Rippers
Browser="DeepIndexer"

[DISCo Pump *]
Parent=Rippers
Browser="DISCo Pump"

[eStyleSearch * (compatible; MSIE 6.0; Windows NT 5.0)]
Parent=Rippers
Browser="eStyleSearch"
Win32=true

[ezic.com http agent *]
Parent=Rippers
Browser="Ezic.com"

[fetch libfetch/*]
Parent=Rippers

[FGet*]
Parent=Rippers
Browser="FGet"

[Flaming AttackBot*]
Parent=Rippers
Browser="Flaming AttackBot"

[Foobot*]
Parent=Rippers
Browser="Foobot"

[GameSpyHTTP/*]
Parent=Rippers
Browser="GameSpyHTTP"

[gnome-vfs/*]
Parent=Rippers
Browser="gnome-vfs"

[Harvest/*]
Parent=Rippers
Browser="Harvest"

[hcat/*]
Parent=Rippers
Browser="hcat"

[HLoader]
Parent=Rippers
Browser="HLoader"

[Holmes/*]
Parent=Rippers
Browser="Holmes"

[HTMLParser/*]
Parent=Rippers
Browser="HTMLParser"

[http generic]
Parent=Rippers
Browser="http generic"

[httpclient*]
Parent=Rippers

[httperf/*]
Parent=Rippers
Browser="httperf"

[HttpSession]
Parent=Rippers
Browser="HttpSession"

[httpunit/*]
Parent=Rippers
Browser="HttpUnit"

[ICE_GetFile]
Parent=Rippers
Browser="ICE_GetFile"

[iexplore.exe]
Parent=Rippers

[Inet - Eureka App]
Parent=Rippers
Browser="Inet - Eureka App"

[INetURL/*]
Parent=Rippers
Browser="INetURL"

[InetURL:/*]
Parent=Rippers
Browser="InetURL"

[Internet Exploiter/*]
Parent=Rippers

[Internet Explore *]
Parent=Rippers
Browser="Fake IE"

[Internet Explorer *]
Parent=Rippers
Browser="Fake IE"

[IP*Works!*/*]
Parent=Rippers
Browser="IP*Works!"

[IrssiUrlLog/*]
Parent=Rippers
Browser="IrssiUrlLog"

[JPluck/*]
Parent=Rippers
Browser="JPluck"

[Kapere (http://www.kapere.com)]
Parent=Rippers
Browser="Kapere"

[LeechFTP]
Parent=Rippers
Browser="LeechFTP"

[LeechGet*]
Parent=Rippers
Browser="LeechGet"

[libcurl-agent/*]
Parent=Rippers
Browser="libcurl"

[libWeb/clsHTTP*]
Parent=Rippers
Browser="libWeb/clsHTTP"

[lwp*]
Parent=Rippers

[MFC_Tear_Sample]
Parent=Rippers
Browser="MFC_Tear_Sample"

[Moozilla]
Parent=Rippers
Browser="Moozilla"

[MovableType/*]
Parent=Rippers
Browser="MovableType Web Log"

[Mozilla/2.0 (compatible; NEWT ActiveX; Win32)]
Parent=Rippers
Browser="NEWT ActiveX"
Platform=Win32

[Mozilla/3.0 (compatible)]
Parent=Rippers

[Mozilla/3.0 (compatible; Indy Library)]
Parent=Rippers
Cookies=true

[Mozilla/3.01 (compatible;)]
Parent=Rippers

[Mozilla/4.0 (compatible; BorderManager*)]
Parent=Rippers
Browser="Novell BorderManager"

[Mozilla/4.0 (compatible;)]
Parent=Rippers

[Mozilla/5.0 (compatible; IPCheck Server Monitor*)]
Parent=Rippers
Browser="IPCheck Server Monitor"

[OCN-SOC/*]
Parent=Rippers
Browser="OCN-SOC"

[Offline Explorer*]
Parent=Rippers
Browser="Offline Explorer"

[Open Web Analytics Bot*]
Parent=Rippers
Browser="Open Web Analytics Bot"

[OSSProxy*]
Parent=Rippers
Browser="OSSProxy"

[Pageload*]
Parent=Rippers
Browser="PageLoad"

[pavuk/*]
Parent=Rippers
Browser="Pavuk"

[PEAR HTTP_Request*]
Parent=Rippers
Browser="PEAR-PHP"

[PHP*]
Parent=Rippers
Browser="PHP"

[PigBlock (Windows NT 5.1; U)*]
Parent=Rippers
Browser="PigBlock"
Win32=true

[Pockey*]
Parent=Rippers
Browser="Pockey-GetHTML"

[POE-Component-Client-HTTP/*]
Parent=Rippers
Browser="POE-Component-Client-HTTP"

[PycURL/*]
Parent=Rippers
Browser="PycURL"

[Python*]
Parent=Rippers
Browser="Python"

[RepoMonkey*]
Parent=Rippers
Browser="RepoMonkey"

[SBL-BOT*]
Parent=Rippers
Browser="BlackWidow"

[ScoutAbout*]
Parent=Rippers
Browser="ScoutAbout"

[sherlock/*]
Parent=Rippers
Browser="Sherlock"

[SiteParser/*]
Parent=Rippers
Browser="SiteParser"

[SiteSnagger*]
Parent=Rippers
Browser="SiteSnagger"

[SiteSucker/*]
Parent=Rippers
Browser="SiteSucker"

[SiteWinder*]
Parent=Rippers
Browser="SiteWinder"

[Snoopy*]
Parent=Rippers
Browser="Snoopy"

[SOFTWING_TEAR_AGENT*]
Parent=Rippers
Browser="AspTear"

[SuperHTTP/*]
Parent=Rippers
Browser="SuperHTTP"

[Tcl http client package*]
Parent=Rippers
Browser="Tcl http client package"

[Twisted PageGetter]
Parent=Rippers
Browser="Twisted PageGetter"

[URL2File/*]
Parent=Rippers
Browser="URL2File"

[UtilMind HTTPGet]
Parent=Rippers
Browser="UtilMind HTTPGet"

[VCI WebViewer*]
Parent=Rippers
Browser="VCI WebViewer"

[W3CRobot/*]
Parent=Rippers
Browser="W3CRobot"

[Web Downloader*]
Parent=Rippers
Browser="Web Downloader"

[Web Downloader/*]
Parent=Rippers
Browser="Web Downloader"

[Web Magnet*]
Parent=Rippers
Browser="Web Magnet"

[WebAuto/*]
Parent=Rippers

[webbandit/*]
Parent=Rippers
Browser="webbandit"

[WebCopier*]
Parent=Rippers
Browser="WebCopier"

[WebDownloader*]
Parent=Rippers
Browser="WebDownloader"

[WebFetch]
Parent=Rippers
Browser="WebFetch"

[webfetch/*]
Parent=Rippers
Browser="WebFetch"

[WebGatherer*]
Parent=Rippers
Browser="WebGatherer"

[WebGet]
Parent=Rippers
Browser="WebGet"

[WebReaper*]
Parent=Rippers
Browser="WebReaper"

[WebRipper]
Parent=Rippers
Browser="WebRipper"

[WebSauger*]
Parent=Rippers
Browser="WebSauger"

[Website Downloader*]
Parent=Rippers
Browser="Website Downloader"

[Website eXtractor*]
Parent=Rippers
Browser="Website eXtractor"

[Website Quester]
Parent=Rippers
Browser="Website Quester"

[WebsiteExtractor*]
Parent=Rippers
Browser="Website eXtractor"

[WebSnatcher*]
Parent=Rippers
Browser="WebSnatcher"

[Webster Pro*]
Parent=Rippers
Browser="Webster Pro"

[WebStripper*]
Parent=Rippers
Browser="WebStripper"

[WebWhacker*]
Parent=Rippers
Browser="WebWhacker"

[WinScripter iNet Tools]
Parent=Rippers
Browser="WinScripter iNet Tools"

[WWW-Mechanize/*]
Parent=Rippers
Browser="WWW-Mechanize"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Site Monitors

[Site Monitors]
Parent=DefaultProperties
Browser="Site Monitors"
Cookies=true
Stripper=true
isBanned=true
Crawler=true

[*EasyRider*]
Parent=Site Monitors
Browser="EasyRider"

[*maxamine.com--robot*]
Parent=Site Monitors
Browser="maxamine.com--robot"
Stripper=true
isBanned=true

[*Netcraft Web Server Survey*]
Parent=Site Monitors
Browser="Netcraft"
Stripper=true
isBanned=true

[*Netcraft Webserver Survey*]
Parent=Site Monitors
Browser="Netcraft Webserver Survey"
Stripper=true
isBanned=true

[*WebMon ?.*]
Parent=Site Monitors
Browser="WebMon"

[Kenjin Spider*]
Parent=Site Monitors
Browser="Kenjin Spider"

[Kevin http://*]
Parent=Site Monitors
Browser="Kevin"
Stripper=true
isBanned=true

[Mozilla/4.0 (compatible; ChangeDetection/*]
Parent=Site Monitors
Browser="ChangeDetection"

[Myst Monitor Service v*]
Parent=Site Monitors
Browser="Myst Monitor Service"

[Net Probe]
Parent=Site Monitors
Browser="Net Probe"

[NetMechanic*]
Parent=Site Monitors
Browser="NetMechanic"

[NetReality*]
Parent=Site Monitors
Browser="NetReality"

[Pingdom GIGRIB*]
Parent=Site Monitors
Browser="Pingdom"

[Site Valet Online*]
Parent=Site Monitors
Browser="Site Valet"
Stripper=true
isBanned=true

[SITECHECKER]
Parent=Site Monitors
Browser="SITECHECKER"

[sitemonitor@dnsvr.com/*]
Parent=Site Monitors
Browser="ZoneEdit Failover Monitor"
Stripper=false
isBanned=false

[UpTime Checker*]
Parent=Site Monitors
Browser="UpTime Checker"

[URL Control*]
Parent=Site Monitors
Browser="URL Control"

[URL_Access/*]
Parent=Site Monitors

[URLCHECK]
Parent=Site Monitors
Browser="URLCHECK"

[URLy Warning*]
Parent=Site Monitors
Browser="URLy Warning"

[Webcheck *]
Parent=Site Monitors
Browser="Webcheck"
Version=1.0
MajorVer=1
MinorVer=0

[WebPatrol/*]
Parent=Site Monitors
Browser="WebPatrol"

[websitepulse checker/*]
Parent=Site Monitors
Browser="websitepulse checker"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Social Bookmarkers

[Social Bookmarkers]
Parent=DefaultProperties
Browser="Social Bookmarkers"
Frames=true
Tables=true
Cookies=true
JavaScript=true

[Cocoal.icio.us/1.0 (v43) (Mac OS X; http://www.scifihifi.com/cocoalicious)]
Parent=Social Bookmarkers
Browser="Cocoalicious"

[WinkBot/*]
Parent=Social Bookmarkers
Browser="WinkBot"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Translators

[Translators]
Parent=DefaultProperties
Browser="Translators"
Frames=true
Tables=true
Cookies=true

[Seram Server]
Parent=Translators
Browser="Seram Server"

[TeragramWebcrawler/*]
Parent=Translators
Browser="TeragramWebcrawler"
Version=1.0
MajorVer=1
MinorVer=0

[WebIndexer/* (Web Indexer; *)]
Parent=Translators
Browser="WorldLingo"

[WebTrans]
Parent=Translators
Browser="WebTrans"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Version Checkers

[Version Checkers]
Parent=DefaultProperties
Browser="Version Checkers"
Crawler=true

[Automated Browscap.ini Updater. To report issues contact us at http://www.skycomp.ca]
Parent=Version Checkers
Browser="Automated Browscap.ini Updater"

[BMC Link Validator (http://www.briansmodelcars.com/links/)]
Parent=Version Checkers
Browser="BMC Link Validator"
MajorVer=1
MinorVer=0
Platform=Win2000

[Browscap updater]
Parent=Version Checkers
Browser="Browscap updater"

[BrowscapUpdater1.0]
Parent=Version Checkers

[Browser Capabilities Project (http://browsers.garykeith.com; http://browsers.garykeith.com/sitemail/contact-me.asp)]
Parent=Version Checkers
Browser="Gary Keith's Version Checker"

[Browser Capabilities Project AutoDownloader; created by Tom Kelleher Consulting, Inc. (tkelleher.com); used with special permission from Gary Joel Keith; uses Microsoft's WinHTTP component]
Parent=Version Checkers
Browser="TKC AutoDownloader"

[browsers.garykeith.com browscap.ini bot BETA]
Parent=Version Checkers

[Code Sample Web Client]
Parent=Version Checkers
Browser="Code Sample Web Client"

[Mono Browser Capabilities Updater*]
Parent=Version Checkers
Browser="Mono Browser Capabilities Updater"
Stripper=true
isBanned=true

[TherapeuticResearch]
Parent=Version Checkers
Browser="TherapeuticResearch"

[UpdateBrowscap*]
Parent=Version Checkers
Browser="UpdateBrowscap"

[www.garykeith.com browscap.ini bot*]
Parent=Version Checkers
Browser="clarkson.edu "

[www.substancia.com AutoHTTPAgent (ver *)]
Parent=Version Checkers
Browser="Subst�ncia"

[psbot/*]
Parent=Webaroo
Browser="PSBot"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Blue Coat Systems

[Blue Coat Systems]
Parent=DefaultProperties
Browser="Blue Coat Systems"
Stripper=true
isBanned=true
Crawler=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; NameProtect

[NameProtect]
Parent=DefaultProperties
Browser="NameProtect"
Stripper=true
isBanned=true
Crawler=true

[abot/*]
Parent=NameProtect
Browser="NameProtect"

[NP/*]
Parent=NameProtect
Browser="NameProtect"

[NPBot*]
Parent=NameProtect
Browser="NameProtect"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; NewsGator

[NewsGator]
Parent=DefaultProperties
Browser="NewsGator"
isSyndicationReader=true

[MarsEdit*]
Parent=NewsGator
Browser="MarsEdit"

[NetNewsWire*/*]
Parent=NewsGator
Browser="NetNewsWire"
Platform=MacOSX

[NewsFire/*]
Parent=NewsGator
Browser="NewsFire"

[NewsGator FetchLinks extension/*]
Parent=NewsGator
Browser="NewsGator FetchLinks"

[NewsGator/*]
Parent=NewsGator
Browser="NewsGator"
Stripper=true
isBanned=true

[NewsGatorOnline/*]
Parent=NewsGator
Browser="NewsGatorOnline"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; The Planet's Vulnerability Scanning

[The Planet]
Parent=DefaultProperties
Browser="The Planet's Vulnerability Scanning"

[*; system(id);*]
Parent=The Planet

[Fastream NETFile Server]
Parent=The Planet

[mercuryboard_user_agent_sql_injection.nasl*]
Parent=The Planet

[Mozilla/4.0 (compatible; gallery_203.nasl; Googlebot)]
Parent=The Planet

[Mozilla/4.75 * (X11, U]
Parent=The Planet

[Mozilla/7 * (X11; U; Linux 2.6.1 ia64)]
Parent=The Planet

[NESSUS::SOAP]
Parent=The Planet
Browser="NESSUS::SOAP"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Jakarta Project

[Jakarta Project]
Parent=DefaultProperties
Browser="Jakarta Project"
Platform=JAVA
Stripper=true
isBanned=true
Crawler=true

[Jakarta Commons-HttpClient/*]
Parent=Jakarta Project
Browser="Jakarta Commons-HttpClient"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Media Players

[Media Players]
Parent=DefaultProperties
Browser="Media Players"
Cookies=true

[iTunes/* (Windows; ?)]
Parent=Media Players
Browser="iTunes"
Platform=Win32
Win32=true

[Microsoft NetShow(TM) Player with RealVideo(R)]
Parent=Media Players
Browser="Microsoft NetShow"

[Mozilla/5.0 (Macintosh; U; PPC Mac OS X; *) AppleWebKit/* RealPlayer]
Parent=Media Players
Browser="RealPlayer"
Platform=MacOSX

[MPlayer 0.9*]
Parent=Media Players
Browser="MPlayer"
Version=0.9
MajorVer=0
MinorVer=9

[MPlayer 1.*]
Parent=Media Players
Browser="MPlayer"
Version=1.0
MajorVer=1
MinorVer=0

[MPlayer HEAD CVS]
Parent=Media Players
Browser="MPlayer"

[RealPlayer*]
Parent=Media Players
Browser="RealPlayer"

[RMA/*]
Parent=Media Players
Browser="RMA"

[vobsub]
Parent=Media Players
Browser="vobsub"
Stripper=true
isBanned=true

[WinampMPEG/*]
Parent=Media Players
Browser="WinAmp"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; QuickTime

[QuickTime]
Parent=DefaultProperties
Browser="QuickTime"
Cookies=true

[QuickTime (qtver=6.0*;cpu=PPC;os=Mac 10.*)]
Parent=QuickTime
Version=6.0
MajorVer=6
MinorVer=0
Platform=MacOSX

[QuickTime (qtver=6.0*;cpu=PPC;os=Mac 9.*)]
Parent=QuickTime
Version=6.0
MajorVer=6
MinorVer=0
Platform=MacPPC

[QuickTime (qtver=6.0*;os=Windows 95*)]
Parent=QuickTime
Version=6.0
MajorVer=6
MinorVer=0
Platform=Win95
Win32=true

[QuickTime (qtver=6.0*;os=Windows 98*)]
Parent=QuickTime
Version=6.0
MajorVer=6
MinorVer=0
Platform=Win98
Win32=true

[QuickTime (qtver=6.0*;os=Windows Me*)]
Parent=QuickTime
Version=6.0
MajorVer=6
MinorVer=0
Platform=WinME
Win32=true

[QuickTime (qtver=6.0*;os=Windows NT 4.0*)]
Parent=QuickTime
Version=6.0
MajorVer=6
MinorVer=0
Platform=WinNT
Win32=true

[QuickTime (qtver=6.0*;os=Windows NT 5.0*)]
Parent=QuickTime
Version=6.0
MajorVer=6
MinorVer=0
Platform=Win2000
Win32=true

[QuickTime (qtver=6.0*;os=Windows NT 5.1*)]
Parent=QuickTime
Version=6.0
MajorVer=6
MinorVer=0
Platform=WinXP
Win32=true

[QuickTime (qtver=6.0*;os=Windows NT 5.2*)]
Parent=QuickTime
Version=6.0
MajorVer=6
MinorVer=0
Platform=Win2003
Win32=true

[QuickTime (qtver=6.1*;cpu=PPC;os=Mac 10.*)]
Parent=QuickTime
Version=6.1
MajorVer=6
MinorVer=1
Platform=MacOSX

[QuickTime (qtver=6.1*;cpu=PPC;os=Mac 9.*)]
Parent=QuickTime
Version=6.1
MajorVer=6
MinorVer=1
Platform=MacPPC

[QuickTime (qtver=6.1*;os=Windows 95*)]
Parent=QuickTime
Version=6.1
MajorVer=6
MinorVer=1
Platform=Win95
Win32=true

[QuickTime (qtver=6.1*;os=Windows 98*)]
Parent=QuickTime
Version=6.1
MajorVer=6
MinorVer=1
Platform=Win98
Win32=true

[QuickTime (qtver=6.1*;os=Windows Me*)]
Parent=QuickTime
Version=6.1
MajorVer=6
MinorVer=1
Platform=WinME
Win32=true

[QuickTime (qtver=6.1*;os=Windows NT 4.0*)]
Parent=QuickTime
Version=6.1
MajorVer=6
MinorVer=1
Platform=WinNT
Win32=true

[QuickTime (qtver=6.1*;os=Windows NT 5.0*)]
Parent=QuickTime
Version=6.1
MajorVer=6
MinorVer=1
Platform=Win2000
Win32=true

[QuickTime (qtver=6.1*;os=Windows NT 5.1*)]
Parent=QuickTime
Version=6.1
MajorVer=6
MinorVer=1
Platform=WinXP
Win32=true

[QuickTime (qtver=6.1*;os=Windows NT 5.2*)]
Parent=QuickTime
Version=6.1
MajorVer=6
MinorVer=1
Platform=Win2003
Win32=true

[QuickTime (qtver=6.2*;cpu=PPC;os=Mac 10.*)]
Parent=QuickTime
Version=6.2
MajorVer=6
MinorVer=2
Platform=MacOSX

[QuickTime (qtver=6.2*;cpu=PPC;os=Mac 9.*)]
Parent=QuickTime
Version=6.2
MajorVer=6
MinorVer=2
Platform=MacPPC

[QuickTime (qtver=6.2*;os=Windows 95*)]
Parent=QuickTime
Version=6.2
MajorVer=6
MinorVer=2
Platform=Win95
Win32=true

[QuickTime (qtver=6.2*;os=Windows 98*)]
Parent=QuickTime
Version=6.2
MajorVer=6
MinorVer=2
Platform=Win98
Win32=true

[QuickTime (qtver=6.2*;os=Windows Me*)]
Parent=QuickTime
Version=6.2
MajorVer=6
MinorVer=2
Platform=WinME
Win32=true

[QuickTime (qtver=6.2*;os=Windows NT 4.0*)]
Parent=QuickTime
Version=6.2
MajorVer=6
MinorVer=2
Platform=WinNT
Win32=true

[QuickTime (qtver=6.2*;os=Windows NT 5.0*)]
Parent=QuickTime
Version=6.2
MajorVer=6
MinorVer=2
Platform=Win2000
Win32=true

[QuickTime (qtver=6.2*;os=Windows NT 5.1*)]
Parent=QuickTime
Version=6.2
MajorVer=6
MinorVer=2
Platform=WinXP
Win32=true

[QuickTime (qtver=6.2*;os=Windows NT 5.2*)]
Parent=QuickTime
Version=6.2
MajorVer=6
MinorVer=2
Platform=Win2003
Win32=true

[QuickTime (qtver=6.3*;cpu=PPC;os=Mac 10.*)]
Parent=QuickTime
Version=6.3
MajorVer=6
MinorVer=3
Platform=MacOSX

[QuickTime (qtver=6.3*;cpu=PPC;os=Mac 9.*)]
Parent=QuickTime
Version=6.3
MajorVer=6
MinorVer=3
Platform=MacPPC

[QuickTime (qtver=6.3*;os=Windows 95*)]
Parent=QuickTime
Version=6.3
MajorVer=6
MinorVer=3
Platform=Win95
Win32=true

[QuickTime (qtver=6.3*;os=Windows 98*)]
Parent=QuickTime
Version=6.3
MajorVer=6
MinorVer=3
Platform=Win98
Win32=true

[QuickTime (qtver=6.3*;os=Windows Me*)]
Parent=QuickTime
Version=6.3
MajorVer=6
MinorVer=3
Platform=WinME
Win32=true

[QuickTime (qtver=6.3*;os=Windows NT 4.0*)]
Parent=QuickTime
Version=6.3
MajorVer=6
MinorVer=3
Platform=WinNT
Win32=true

[QuickTime (qtver=6.3*;os=Windows NT 5.0*)]
Parent=QuickTime
Version=6.3
MajorVer=6
MinorVer=3
Platform=Win2000
Win32=true

[QuickTime (qtver=6.3*;os=Windows NT 5.1*)]
Parent=QuickTime
Version=6.3
MajorVer=6
MinorVer=3
Platform=WinXP
Win32=true

[QuickTime (qtver=6.3*;os=Windows NT 5.2*)]
Parent=QuickTime
Version=6.3
MajorVer=6
MinorVer=3
Platform=Win2003
Win32=true

[QuickTime (qtver=6.4*;cpu=PPC;os=Mac 10.*)]
Parent=QuickTime
Version=6.4
MajorVer=6
MinorVer=4
Platform=MacOSX

[QuickTime (qtver=6.4*;cpu=PPC;os=Mac 9.*)]
Parent=QuickTime
Version=6.4
MajorVer=6
MinorVer=4
Platform=MacPPC

[QuickTime (qtver=6.4*;os=Windows 95*)]
Parent=QuickTime
Version=6.4
MajorVer=6
MinorVer=4
Platform=Win95
Win32=true

[QuickTime (qtver=6.4*;os=Windows 98*)]
Parent=QuickTime
Version=6.4
MajorVer=6
MinorVer=4
Platform=Win98
Win32=true

[QuickTime (qtver=6.4*;os=Windows Me*)]
Parent=QuickTime
Version=6.4
MajorVer=6
MinorVer=4
Platform=WinME
Win32=true

[QuickTime (qtver=6.4*;os=Windows NT 4.0*)]
Parent=QuickTime
Version=6.4
MajorVer=6
MinorVer=4
Platform=WinNT
Win32=true

[QuickTime (qtver=6.4*;os=Windows NT 5.0*)]
Parent=QuickTime
Version=6.4
MajorVer=6
MinorVer=4
Platform=Win2000
Win32=true

[QuickTime (qtver=6.4*;os=Windows NT 5.1*)]
Parent=QuickTime
Version=6.4
MajorVer=6
MinorVer=4
Platform=WinXP
Win32=true

[QuickTime (qtver=6.4*;os=Windows NT 5.2*)]
Parent=QuickTime
Version=6.4
MajorVer=6
MinorVer=4
Platform=Win2003
Win32=true

[QuickTime (qtver=6.5*;cpu=PPC;os=Mac 10.*)]
Parent=QuickTime
Version=6.5
MajorVer=6
MinorVer=5
Platform=MacOSX

[QuickTime (qtver=6.5*;cpu=PPC;os=Mac 9.*)]
Parent=QuickTime
Version=6.5
MajorVer=6
MinorVer=5
Platform=MacPPC

[QuickTime (qtver=6.5*;os=Windows 95*)]
Parent=QuickTime
Version=6.5
MajorVer=6
MinorVer=5
Platform=Win95
Win32=true

[QuickTime (qtver=6.5*;os=Windows 98*)]
Parent=QuickTime
Version=6.5
MajorVer=6
MinorVer=5
Platform=Win98
Win32=true

[QuickTime (qtver=6.5*;os=Windows Me*)]
Parent=QuickTime
Version=6.5
MajorVer=6
MinorVer=5
Platform=WinME
Win32=true

[QuickTime (qtver=6.5*;os=Windows NT 4.0*)]
Parent=QuickTime
Version=6.5
MajorVer=6
MinorVer=5
Platform=WinNT
Win32=true

[QuickTime (qtver=6.5*;os=Windows NT 5.0*)]
Parent=QuickTime
Version=6.5
MajorVer=6
MinorVer=5
Platform=Win2000
Win32=true

[QuickTime (qtver=6.5*;os=Windows NT 5.1*)]
Parent=QuickTime
Version=6.5
MajorVer=6
MinorVer=5
Platform=WinXP
Win32=true

[QuickTime (qtver=6.5*;os=Windows NT 5.2*)]
Parent=QuickTime
Version=6.5
MajorVer=6
MinorVer=5
Platform=Win2003
Win32=true

[QuickTime (qtver=6.6*;cpu=PPC;os=Mac 10.*)]
Parent=QuickTime
Version=6.6
MajorVer=6
MinorVer=6
Platform=MacOSX

[QuickTime (qtver=6.6*;cpu=PPC;os=Mac 9.*)]
Parent=QuickTime
Version=6.6
MajorVer=6
MinorVer=6
Platform=MacPPC

[QuickTime (qtver=6.6*;os=Windows 95*)]
Parent=QuickTime
Version=6.6
MajorVer=6
MinorVer=6
Platform=Win95
Win32=true

[QuickTime (qtver=6.6*;os=Windows 98*)]
Parent=QuickTime
Version=6.6
MajorVer=6
MinorVer=6
Platform=Win98
Win32=true

[QuickTime (qtver=6.6*;os=Windows Me*)]
Parent=QuickTime
Version=6.6
MajorVer=6
MinorVer=6
Platform=WinME
Win32=true

[QuickTime (qtver=6.6*;os=Windows NT 4.0*)]
Parent=QuickTime
Version=6.6
MajorVer=6
MinorVer=6
Platform=WinNT
Win32=true

[QuickTime (qtver=6.6*;os=Windows NT 5.0*)]
Parent=QuickTime
Version=6.6
MajorVer=6
MinorVer=6
Platform=Win2000
Win32=true

[QuickTime (qtver=6.6*;os=Windows NT 5.1*)]
Parent=QuickTime
Version=6.6
MajorVer=6
MinorVer=6
Platform=WinXP
Win32=true

[QuickTime (qtver=6.6*;os=Windows NT 5.2*)]
Parent=QuickTime
Version=6.6
MajorVer=6
MinorVer=6
Platform=Win2003
Win32=true

[QuickTime (qtver=6.7*;cpu=PPC;os=Mac 10.*)]
Parent=QuickTime
Version=6.7
MajorVer=6
MinorVer=7
Platform=MacOSX

[QuickTime (qtver=6.7*;cpu=PPC;os=Mac 9.*)]
Parent=QuickTime
Version=6.7
MajorVer=6
MinorVer=7
Platform=MacPPC

[QuickTime (qtver=6.7*;os=Windows 95*)]
Parent=QuickTime
Version=6.7
MajorVer=6
MinorVer=7
Platform=Win95
Win32=true

[QuickTime (qtver=6.7*;os=Windows 98*)]
Parent=QuickTime
Version=6.7
MajorVer=6
MinorVer=7
Platform=Win98
Win32=true

[QuickTime (qtver=6.7*;os=Windows Me*)]
Parent=QuickTime
Version=6.7
MajorVer=6
MinorVer=7
Platform=WinME
Win32=true

[QuickTime (qtver=6.7*;os=Windows NT 4.0*)]
Parent=QuickTime
Version=6.7
MajorVer=6
MinorVer=7
Platform=WinNT
Win32=true

[QuickTime (qtver=6.7*;os=Windows NT 5.0*)]
Parent=QuickTime
Version=6.7
MajorVer=6
MinorVer=7
Platform=Win2000
Win32=true

[QuickTime (qtver=6.7*;os=Windows NT 5.1*)]
Parent=QuickTime
Version=6.7
MajorVer=6
MinorVer=7
Platform=WinXP
Win32=true

[QuickTime (qtver=6.7*;os=Windows NT 5.2*)]
Parent=QuickTime
Version=6.7
MajorVer=6
MinorVer=7
Platform=Win2003
Win32=true

[QuickTime (qtver=6.8*;cpu=PPC;os=Mac 10.*)]
Parent=QuickTime
Version=6.8
MajorVer=6
MinorVer=8
Platform=MacOSX

[QuickTime (qtver=6.8*;cpu=PPC;os=Mac 9.*)]
Parent=QuickTime
Version=6.8
MajorVer=6
MinorVer=8
Platform=MacPPC

[QuickTime (qtver=6.8*;os=Windows 95*)]
Parent=QuickTime
Version=6.8
MajorVer=6
MinorVer=8
Platform=Win95
Win32=true

[QuickTime (qtver=6.8*;os=Windows 98*)]
Parent=QuickTime
Version=6.8
MajorVer=6
MinorVer=8
Platform=Win98
Win32=true

[QuickTime (qtver=6.8*;os=Windows Me*)]
Parent=QuickTime
Version=6.8
MajorVer=6
MinorVer=8
Platform=WinME
Win32=true

[QuickTime (qtver=6.8*;os=Windows NT 4.0*)]
Parent=QuickTime
Version=6.8
MajorVer=6
MinorVer=8
Platform=WinNT
Win32=true

[QuickTime (qtver=6.8*;os=Windows NT 5.0*)]
Parent=QuickTime
Version=6.8
MajorVer=6
MinorVer=8
Platform=Win2000
Win32=true

[QuickTime (qtver=6.8*;os=Windows NT 5.1*)]
Parent=QuickTime
Version=6.8
MajorVer=6
MinorVer=8
Platform=WinXP
Win32=true

[QuickTime (qtver=6.8*;os=Windows NT 5.2*)]
Parent=QuickTime
Version=6.8
MajorVer=6
MinorVer=8
Platform=Win2003
Win32=true

[QuickTime (qtver=6.9*;cpu=PPC;os=Mac 10.*)]
Parent=QuickTime
Version=6.9
MajorVer=6
MinorVer=9
Platform=MacOSX

[QuickTime (qtver=6.9*;cpu=PPC;os=Mac 9.*)]
Parent=QuickTime
Version=6.9
MajorVer=6
MinorVer=9
Platform=MacPPC

[QuickTime (qtver=6.9*;os=Windows 95*)]
Parent=QuickTime
Version=6.9
MajorVer=6
MinorVer=9
Platform=Win95
Win32=true

[QuickTime (qtver=6.9*;os=Windows 98*)]
Parent=QuickTime
Version=6.9
MajorVer=6
MinorVer=9
Platform=Win98
Win32=true

[QuickTime (qtver=6.9*;os=Windows Me*)]
Parent=QuickTime
Version=6.9
MajorVer=6
MinorVer=9
Platform=WinME
Win32=true

[QuickTime (qtver=6.9*;os=Windows NT 4.0*)]
Parent=QuickTime
Version=6.9
MajorVer=6
MinorVer=9
Platform=WinNT
Win32=true

[QuickTime (qtver=6.9*;os=Windows NT 5.0*)]
Parent=QuickTime
Version=6.9
MajorVer=6
MinorVer=9
Platform=Win2000
Win32=true

[QuickTime (qtver=6.9*;os=Windows NT 5.1*)]
Parent=QuickTime
Version=6.9
MajorVer=6
MinorVer=9
Platform=WinXP
Win32=true

[QuickTime (qtver=6.9*;os=Windows NT 5.2*)]
Parent=QuickTime
Version=6.9
MajorVer=6
MinorVer=9
Platform=Win2003
Win32=true

[QuickTime (qtver=7.0*;cpu=PPC;os=Mac 10.*)]
Parent=QuickTime
Version=7.0
MajorVer=7
MinorVer=0
Platform=MacOSX

[QuickTime (qtver=7.0*;cpu=PPC;os=Mac 9.*)]
Parent=QuickTime
Version=7.0
MajorVer=7
MinorVer=0
Platform=MacPPC

[QuickTime (qtver=7.0*;os=Windows 95*)]
Parent=QuickTime
Version=7.0
MajorVer=7
MinorVer=0
Platform=Win95
Win32=true

[QuickTime (qtver=7.0*;os=Windows 98*)]
Parent=QuickTime
Version=7.0
MajorVer=7
MinorVer=0
Platform=Win98
Win32=true

[QuickTime (qtver=7.0*;os=Windows Me*)]
Parent=QuickTime
Version=7.0
MajorVer=7
MinorVer=0
Platform=WinME
Win32=true

[QuickTime (qtver=7.0*;os=Windows NT 4.0*)]
Parent=QuickTime
Version=7.0
MajorVer=7
MinorVer=0
Platform=WinNT
Win32=true

[QuickTime (qtver=7.0*;os=Windows NT 5.0*)]
Parent=QuickTime
Version=7.0
MajorVer=7
MinorVer=0
Platform=Win2000
Win32=true

[QuickTime (qtver=7.0*;os=Windows NT 5.1*)]
Parent=QuickTime
Version=7.0
MajorVer=7
MinorVer=0
Platform=WinXP
Win32=true

[QuickTime (qtver=7.0*;os=Windows NT 5.2*)]
Parent=QuickTime
Version=7.0
MajorVer=7
MinorVer=0
Platform=Win2003
Win32=true

[QuickTime (qtver=7.1*;cpu=PPC;os=Mac 10.*)]
Parent=QuickTime
Version=7.1
MajorVer=7
MinorVer=1
Platform=MacOSX

[QuickTime (qtver=7.1*;cpu=PPC;os=Mac 9.*)]
Parent=QuickTime
Version=7.1
MajorVer=7
MinorVer=1
Platform=MacPPC

[QuickTime (qtver=7.1*;os=Windows 98*)]
Parent=QuickTime
Version=7.1
MajorVer=7
MinorVer=1
Platform=Win98
Win32=true

[QuickTime (qtver=7.1*;os=Windows NT 4.0*)]
Parent=QuickTime
Version=7.1
MajorVer=7
MinorVer=1
Platform=WinNT
Win32=true

[QuickTime (qtver=7.1*;os=Windows NT 5.0*)]
Parent=QuickTime
Version=7.1
MajorVer=7
MinorVer=1
Platform=Win2000
Win32=true

[QuickTime (qtver=7.1*;os=Windows NT 5.1*)]
Parent=QuickTime
MajorVer=7.1
MinorVer=7
Platform=WinXP
Win32=true

[QuickTime (qtver=7.1*;os=Windows NT 5.2*)]
Parent=QuickTime
Version=7.1
MajorVer=7
MinorVer=1
Platform=Win2003
Win32=true

[QuickTime/7.0.* (qtver=7.0.*;*;os=Mac 10.*)*]
Parent=QuickTime
Version=7.0
MajorVer=7
MinorVer=0
Platform=MacOSX

[QuickTime/7.1.* (qtver=7.1.*;*;os=Mac 10.*)*]
Parent=QuickTime
Version=7.1
MajorVer=7
MinorVer=1
Platform=MacOSX

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Windows Media Player

[Windows Media Player]
Parent=DefaultProperties
Browser="Windows Media Player"
Cookies=true

[NSPlayer/10.*]
Parent=Windows Media Player
Version=10.0
MajorVer=10
MinorVer=0

[NSPlayer/11.* WMFSDK/11.*]
Parent=Windows Media Player
Browser="Windows Media Player"
Version=11.0
MajorVer=11
MinorVer=0

[NSPlayer/4.*]
Parent=Windows Media Player
Browser="Windows Media Player"
Version=4.0
MajorVer=4
MinorVer=0

[NSPlayer/7.*]
Parent=Windows Media Player
Browser="Windows Media Player"
Version=7.0
MajorVer=7
MinorVer=0

[NSPlayer/8.*]
Parent=Windows Media Player
Browser="Windows Media Player"
Version=8.0
MajorVer=8
MinorVer=0

[NSPlayer/9.*]
Parent=Windows Media Player
Browser="Windows Media Player"
Version=9.0
MajorVer=9
MinorVer=0

[Windows-Media-Player/10.*]
Parent=Windows Media Player
Browser="Windows-Media-Player"
Version=10.0
MajorVer=10
MinorVer=0
Win32=true

[Windows-Media-Player/11.*]
Parent=Windows Media Player
Version=11.0
MajorVer=11
MinorVer=0
Win32=true

[Windows-Media-Player/7.*]
Parent=Windows Media Player
Browser="Windows Media Player"
Version=7.0
MajorVer=7
MinorVer=0
Win32=true

[Windows-Media-Player/8.*]
Parent=Windows Media Player
Browser="Windows Media Player"
Version=8.0
MajorVer=8
MinorVer=0
Win32=true

[Windows-Media-Player/9.*]
Parent=Windows Media Player
Version=9.0
MajorVer=9
MinorVer=0
Win32=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; AvantGo

[AvantGo]
Parent=DefaultProperties
Browser="AvantGo"
Frames=true
Tables=true
Cookies=true
JavaScript=true
WAP=true
isMobileDevice=true

[AvantGo*]
Parent=AvantGo

[Mozilla/?.0 (*; U; AvantGo 3.?)]
Parent=AvantGo
Version=3.0
MajorVer=3
MinorVer=0

[Mozilla/?.0 (*; U; AvantGo 4.?)]
Parent=AvantGo
Version=4.0
MajorVer=4
MinorVer=0

[Mozilla/?.0 (*; U; AvantGo 5.?)]
Parent=AvantGo
Version=5.0
MajorVer=5
MinorVer=0

[Mozilla/?.0 (*; U; AvantGo 6.?)]
Parent=AvantGo
Version=6.0
MajorVer=6
MinorVer=0

[Mozilla/?.0 (compatible; AvantGo 3.?)]
Parent=AvantGo
Version=3.0
MajorVer=3
MinorVer=0

[Mozilla/?.0 (compatible; AvantGo 3.?; *)]
Parent=AvantGo
Version=3.0
MajorVer=3
MinorVer=0

[Mozilla/?.0 (compatible; AvantGo 3.?; FreeBSD)]
Parent=AvantGo
Version=3.0
MajorVer=3
MinorVer=0
Platform=FreeBSD

[Mozilla/?.0 (compatible; AvantGo 4.?)]
Parent=AvantGo
Version=4.0
MajorVer=4
MinorVer=0

[Mozilla/?.0 (compatible; AvantGo 4.?; *)]
Parent=AvantGo
Version=4.0
MajorVer=4
MinorVer=0

[Mozilla/?.0 (compatible; AvantGo 4.?; FreeBSD)]
Parent=AvantGo
Version=4.0
MajorVer=4
MinorVer=0
Platform=FreeBSD

[Mozilla/?.0 (compatible; AvantGo 5.?)]
Parent=AvantGo
Version=5.0
MajorVer=5
MinorVer=0

[Mozilla/?.0 (compatible; AvantGo 5.?; *)]
Parent=AvantGo
Version=5.0
MajorVer=5
MinorVer=0

[Mozilla/?.0 (compatible; AvantGo 5.?; FreeBSD)]
Parent=AvantGo
Version=5.0
MajorVer=5
MinorVer=0
Platform=FreeBSD

[Mozilla/?.0 (compatible; AvantGo 6.?)]
Parent=AvantGo
Version=6.0
MajorVer=6
MinorVer=0

[Mozilla/?.0 (compatible; AvantGo 6.?; *)]
Parent=AvantGo
Version=6.0
MajorVer=6
MinorVer=0

[Mozilla/?.0 (compatible; AvantGo 6.?; FreeBSD)]
Parent=AvantGo
Version=6.0
MajorVer=6
MinorVer=0
Platform=FreeBSD

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; BlackBerry

[BlackBerry]
Parent=DefaultProperties
Browser="BlackBerry"
Frames=true
Tables=true
Cookies=true
JavaScript=true
WAP=true
isMobileDevice=true

[BlackBerry7*/3.5.*]
Parent=BlackBerry
Version=3.5
MajorVer=3
MinorVer=5

[BlackBerry7*/3.6.*]
Parent=BlackBerry
Version=3.6
MajorVer=3
MinorVer=6

[BlackBerry7*/3.7.*]
Parent=BlackBerry
Version=3.7
MajorVer=3
MinorVer=7

[BlackBerry7*/3.8.*]
Parent=BlackBerry
Version=3.8
MajorVer=3
MinorVer=8

[BlackBerry7*/3.9.*]
Parent=BlackBerry
Version=3.9
MajorVer=3
MinorVer=9

[BlackBerry7*/4.0.*]
Parent=BlackBerry
Version=4.0
MajorVer=4
MinorVer=0

[BlackBerry7*/4.1.*]
Parent=BlackBerry
Version=4.1
MajorVer=4
MinorVer=1

[BlackBerry8*/3.5.*]
Parent=BlackBerry
Version=3.5
MajorVer=3
MinorVer=5

[BlackBerry8*/3.6.*]
Parent=BlackBerry
Version=3.6
MajorVer=3
MinorVer=6

[BlackBerry8*/3.7.*]
Parent=BlackBerry
Version=3.7
MajorVer=3
MinorVer=7

[BlackBerry8*/3.8.*]
Parent=BlackBerry
Version=3.8
MajorVer=3
MinorVer=8

[BlackBerry8*/3.9.*]
Parent=BlackBerry
Version=3.9
MajorVer=3
MinorVer=9

[BlackBerry8*/4.0.*]
Parent=BlackBerry
Version=4.0
MajorVer=4
MinorVer=0

[BlackBerry8*/4.1.*]
Parent=BlackBerry
Version=4.1
MajorVer=4
MinorVer=1

[BlackBerry8*/4.2.*]
Parent=BlackBerry
Version=4.2
MajorVer=4
MinorVer=2

[BlackBerrySimulator/3.5.*]
Parent=BlackBerry
Version=3.5
MajorVer=3
MinorVer=5

[BlackBerrySimulator/3.6.*]
Parent=BlackBerry
Version=3.6
MajorVer=3
MinorVer=6

[BlackBerrySimulator/3.7.*]
Parent=BlackBerry
Version=3.7
MajorVer=3
MinorVer=7

[BlackBerrySimulator/3.8.*]
Parent=BlackBerry
Version=3.8
MajorVer=3
MinorVer=8

[BlackBerrySimulator/3.9.*]
Parent=BlackBerry
Version=3.9
MajorVer=3
MinorVer=9

[BlackBerrySimulator/4.0.*]
Parent=BlackBerry
Version=4.0
MajorVer=4
MinorVer=0

[BlackBerrySimulator/4.1.*]
Parent=BlackBerry
Version=4.1
MajorVer=4
MinorVer=1

[Mozilla/?.0 (compatible; MSIE ?.*; Windows*) BlackBerry7*/3.5.*]
Parent=BlackBerry
Version=3.5
MajorVer=3
MinorVer=5
Win32=true

[Mozilla/?.0 (compatible; MSIE ?.*; Windows*) BlackBerry7*/3.6.*]
Parent=BlackBerry
Version=3.6
MajorVer=3
MinorVer=6
Win32=true

[Mozilla/?.0 (compatible; MSIE ?.*; Windows*) BlackBerry7*/3.7.*]
Parent=BlackBerry
Version=3.7
MajorVer=3
MinorVer=7
Win32=true

[Mozilla/?.0 (compatible; MSIE ?.*; Windows*) BlackBerry7*/3.8.*]
Parent=BlackBerry
Version=3.8
MajorVer=3
MinorVer=8
Win32=true

[Mozilla/?.0 (compatible; MSIE ?.*; Windows*) BlackBerry7*/3.9.*]
Parent=BlackBerry
Version=3.9
MajorVer=3
MinorVer=9
Win32=true

[Mozilla/?.0 (compatible; MSIE ?.*; Windows*) BlackBerry7*/4.0.*]
Parent=BlackBerry
Version=4.0
MajorVer=4
MinorVer=0
Win32=true

[Mozilla/?.0 (compatible; MSIE ?.*; Windows*) BlackBerry7*/4.1.*]
Parent=BlackBerry
Version=4.1
MajorVer=4
MinorVer=1
Win32=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Handspring Blazer

[Blazer]
Parent=DefaultProperties
Browser="Handspring Blazer"
Platform=Palm
Frames=true
Tables=true
Cookies=true
WAP=true
isMobileDevice=true

[Mozilla/4.0 (compatible; MSIE 6.0; Windows 9?; PalmSource/*; Blazer/3.*) ??;???x???]
Parent=Blazer
Version=3.0
MajorVer=3
MinorVer=0
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; Windows 9?; PalmSource/*; Blazer/4.*) ??;???x???]
Parent=Blazer
Version=4.0
MajorVer=4
MinorVer=0
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; Windows 9?; PalmSource/*; Blazer/5.*) ??;???x???]
Parent=Blazer
Version=5.0
MajorVer=5
MinorVer=0
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; Windows 9?; PalmSource; Blazer 3.*) ??;???x???]
Parent=Blazer
Version=3.0
MajorVer=3
MinorVer=0
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; Windows 9?; PalmSource; Blazer 4.*) ??;???x???]
Parent=Blazer
Version=4.0
MajorVer=4
MinorVer=0
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; Windows 9?; PalmSource; Blazer 5.*) ??;???x???]
Parent=Blazer
Version=5.0
MajorVer=5
MinorVer=0
Win32=true

[UPG1 UP/?.0 (*compatible; Blazer 3.*)]
Parent=Blazer
Version=3.0
MajorVer=3
MinorVer=0

[UPG1 UP/?.0 (*compatible; Blazer 4.*)]
Parent=Blazer
Version=4.0
MajorVer=4
MinorVer=0

[UPG1 UP/?.0 (*compatible; Blazer 5.*)]
Parent=Blazer
Version=5.0
MajorVer=5
MinorVer=0

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Danger

[Danger]
Parent=DefaultProperties
Browser="Danger"
Platform=JAVA
Frames=true
Tables=true
Cookies=true
JavaScript=true
WAP=true
isMobileDevice=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/5.0 (*Danger hiptop 1.0*)]
Parent=Danger
Version=1.0
MajorVer=1
MinorVer=0

[Mozilla/5.0 (*Danger hiptop 2.0*)]
Parent=Danger
Version=2.0
MajorVer=2
MinorVer=0

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; DoCoMo

[DoCoMo]
Parent=DefaultProperties
Browser="DoCoMo"
Frames=true
Tables=true
Cookies=true
JavaScript=true
WAP=true
isMobileDevice=true

[DoCoMo/1.0*]
Parent=DoCoMo
Version=1.0
MajorVer=1
MinorVer=0
Platform=WAP
CSS=1
CssVersion=1
supportsCSS=true

[DoCoMo/2.0*]
Parent=DoCoMo
Version=2.0
MajorVer=2
MinorVer=0
Platform=WAP
CSS=1
CssVersion=1
supportsCSS=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Doris

[Doris]
Parent=DefaultProperties
Browser="Doris"
Platform=SymbianOS
Frames=true
Tables=true
Cookies=true
WAP=true
isMobileDevice=true

[Doris/*]
Parent=Doris

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; jig

[jig]
Parent=DefaultProperties
Browser="jig"
Frames=true
Tables=true
Cookies=true
JavaScript=true
WAP=true
isMobileDevice=true

[Mozilla/4.0 (jig browser web; *)]
Parent=jig
Browser="jig browser web"

[Mozilla/4.0 (jig browser; *)]
Parent=jig
Browser="jig browser"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; KDDI

[KDDI]
Parent=DefaultProperties
Browser="KDDI"
Frames=true
Tables=true
Cookies=true
BackgroundSounds=true
VBScript=true
JavaScript=true
ActiveXControls=true
WAP=true
isMobileDevice=true
CSS=1
CssVersion=1
supportsCSS=true

[KDDI-CA?? UP.Browser/* (GUI) MMP/*]
Parent=KDDI

[KDDI-Googlebot-Mobile]
Parent=KDDI

[KDDI-HI?? UP.Browser/* (GUI) MMP/*]
Parent=KDDI

[KDDI-KC?? UP.Browser/* (GUI) MMP/*]
Parent=KDDI

[KDDI-PT?? UP.Browser/* (GUI) MMP/*]
Parent=KDDI

[KDDI-SA?? UP.Browser/* (GUI) MMP/*]
Parent=KDDI

[KDDI-SN?? UP.Browser/* (GUI) MMP/*]
Parent=KDDI

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Motorola Internet Browser

[Motorola Web Browser]
Parent=DefaultProperties
Browser="Motorola Internet Browser"
Frames=true
Tables=true
Cookies=true
WAP=true
isMobileDevice=true

[MOT-1*/* UP.Browser/*]
Parent=Motorola Internet Browser

[MOT-8700_/* UP.Browser/*]
Parent=Motorola Internet Browser

[MOT-A-0A/* UP.Browser/*]
Parent=Motorola Internet Browser

[MOT-A-2B/* UP.Browser/*]
Parent=Motorola Internet Browser

[MOT-A-88/* UP.Browser/*]
Parent=Motorola Internet Browser

[MOT-C???/* MIB/*]
Parent=Motorola Internet Browser

[MOT-GATW_/* UP.Browser/*]
Parent=Motorola Internet Browser

[MOT-L6/* MIB/*]
Parent=Motorola Internet Browser

[MOT-L7/* MIB/*]
Parent=Motorola Internet Browser

[MOT-M*/* UP.Browser/*]
Parent=Motorola Internet Browser

[MOT-MP*/* Mozilla/4.0 (compatible; MSIE *; Windows CE; *)]
Parent=Motorola Internet Browser
Win32=true

[MOT-SAP4_/* UP.Browser/*]
Parent=Motorola Internet Browser

[MOT-T7*/* MIB/*]
Parent=Motorola Internet Browser

[MOT-T721*]
Parent=Motorola Internet Browser

[MOT-TA02/* MIB/*]
Parent=Motorola Internet Browser

[MOT-V*/* MIB/*]
Parent=Motorola Internet Browser

[MOT-V*/* UP.Browser/*]
Parent=Motorola Internet Browser

[MOT-V3/* MIB/*]
Parent=Motorola Internet Browser

[MOT-V4*/* MIB/*]
Parent=Motorola Internet Browser

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Motorola Internet Browser

[Motorola Web Browser]
Parent=DefaultProperties
Browser="Motorola Internet Browser"
Frames=true
Tables=true
Cookies=true
WAP=true
isMobileDevice=true

[MOT-1*/* UP.Browser/*]
Parent=Motorola Web Browser

[MOT-8700_/* UP.Browser/*]
Parent=Motorola Web Browser

[MOT-A-0A/* UP.Browser/*]
Parent=Motorola Web Browser

[MOT-A-2B/* UP.Browser/*]
Parent=Motorola Web Browser

[MOT-A-88/* UP.Browser/*]
Parent=Motorola Web Browser

[MOT-C???/* MIB/*]
Parent=Motorola Web Browser

[MOT-GATW_/* UP.Browser/*]
Parent=Motorola Web Browser

[MOT-L6/* MIB/*]
Parent=Motorola Web Browser

[MOT-L7/* MIB/*]
Parent=Motorola Web Browser

[MOT-M*/* UP.Browser/*]
Parent=Motorola Web Browser

[MOT-MP*/* Mozilla/4.0 (compatible; MSIE *; Windows CE; *)]
Parent=Motorola Web Browser
Win32=true

[MOT-SAP4_/* UP.Browser/*]
Parent=Motorola Web Browser

[MOT-T7*/* MIB/*]
Parent=Motorola Web Browser

[MOT-T721*]
Parent=Motorola Web Browser

[MOT-TA02/* MIB/*]
Parent=Motorola Web Browser

[MOT-V*/* MIB/*]
Parent=Motorola Web Browser

[MOT-V*/* UP.Browser/*]
Parent=Motorola Web Browser

[MOT-V3/* MIB/*]
Parent=Motorola Web Browser

[MOT-V4*/* MIB/*]
Parent=Motorola Web Browser

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; MSN Mobile Proxy

[MSN Mobile Proxy]
Parent=DefaultProperties
Browser="MSN Mobile Proxy"
Win32=true
Frames=true
Tables=true
Cookies=true
JavaScript=true
ActiveXControls=true
WAP=true
isMobileDevice=true

[Mozilla/4.0 (compatible; MSIE 4.01; Windows NT; MSN Mobile Proxy)]
Parent=MSN Mobile Proxy

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; NetFront

[NetFront]
Parent=DefaultProperties
Browser="NetFront"
Frames=true
Tables=true
Cookies=true
JavaScript=true
WAP=true
isMobileDevice=true

[*NetFront/3.2]
Parent=NetFront
Version=3.2
MajorVer=3
MinorVer=2
WAP=true
isMobileDevice=true

[Mozilla/* (*)*NetFront/3.0*]
Parent=NetFront
Version=3.0
MajorVer=3
MinorVer=0

[Mozilla/* (*)*NetFront/3.1*]
Parent=NetFront
Version=3.1
MajorVer=3
MinorVer=1

[Mozilla/* (*)*NetFront/3.2*]
Parent=NetFront
Version=3.2
MajorVer=3
MinorVer=2

[Mozilla/* (*)*NetFront/3.3*]
Parent=NetFront
Version=3.3
MajorVer=3
MinorVer=3

[Mozilla/* (compatible; MSIE *; Windows *) NetFront/3.0*]
Parent=NetFront
Version=3.0
MajorVer=3
MinorVer=0
Win32=true

[Mozilla/* (compatible; MSIE *; Windows *) NetFront/3.1*]
Parent=NetFront
Version=3.1
MajorVer=3
MinorVer=1
Win32=true

[Mozilla/* (compatible; MSIE *; Windows *) NetFront/3.2*]
Parent=NetFront
Version=3.2
MajorVer=3
MinorVer=2
Win32=true

[Mozilla/* (compatible; MSIE *; Windows *) NetFront/3.3*]
Parent=NetFront
Version=3.3
MajorVer=3
MinorVer=3
Win32=true

[Mozilla/* (MobilePhone*) NetFront/3.0*]
Parent=NetFront
Version=3.0
MajorVer=3
MinorVer=0

[Mozilla/* (MobilePhone*) NetFront/3.1*]
Parent=NetFront
Version=3.1
MajorVer=3
MinorVer=1

[Mozilla/* (MobilePhone*) NetFront/3.2*]
Parent=NetFront
Version=3.2
MajorVer=3
MinorVer=2

[Mozilla/* (MobilePhone*) NetFront/3.3*]
Parent=NetFront
Version=3.3
MajorVer=3
MinorVer=3

[Mozilla/* (SmartPhone*) NetFront/3.0*]
Parent=NetFront
Version=3.0
MajorVer=3
MinorVer=0

[Mozilla/* (SmartPhone*) NetFront/3.1*]
Parent=NetFront
Version=3.1
MajorVer=3
MinorVer=1

[Mozilla/* (SmartPhone*) NetFront/3.2*]
Parent=NetFront
Version=3.2
MajorVer=3
MinorVer=2

[Mozilla/* (SmartPhone*) NetFront/3.3*]
Parent=NetFront
Version=3.3
MajorVer=3
MinorVer=3

[Mozilla/* (Windows; U; NT4.0; *) NetFront/3.0*]
Parent=NetFront
Version=3.0
MajorVer=3
MinorVer=0
Win32=true

[Mozilla/* (Windows; U; NT4.0; *) NetFront/3.1*]
Parent=NetFront
Version=3.1
MajorVer=3
MinorVer=1
Win32=true

[Mozilla/* (Windows; U; NT4.0; *) NetFront/3.2*]
Parent=NetFront
Version=3.2
MajorVer=3
MinorVer=2
Win32=true

[Mozilla/* (Windows; U; NT4.0; *) NetFront/3.3*]
Parent=NetFront
Version=3.3
MajorVer=3
MinorVer=3
Win32=true

[SAMSUNG-SGH-* Configuration/CLDC-?.? NetFront/3.2]
Parent=NetFront
Version=3.2
MajorVer=3
MinorVer=2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Nokia

[Nokia]
Parent=DefaultProperties
Browser="Nokia"
Tables=true
Cookies=true
WAP=true
isMobileDevice=true

[Mozilla/5.0 (SymbianOS/*; U; *) AppleWebKit/413 (KHTML, like Gecko) Safari/413]
Parent=Nokia

[Nokia????/* SymbianOS/* Series60/*]
Parent=Nokia
Platform=SymbianOS
Frames=true
JavaScript=true

[Nokia????/1.0 (*) Profile/MIDP-?.? Configuration/CLDC-?.?*]
Parent=Nokia
Frames=false
JavaScript=false

[Nokia????/1.0 (*)*]
Parent=Nokia
Frames=false
JavaScript=false

[Nokia????/2.0 (*) Profile/MIDP-?.? Configuration/CLDC-?.?*]
Parent=Nokia

[Nokia????/2.0 (*) SymbianOS/* Series60/* Profile/MIDP-?.? Configuration/CLDC-?.?*]
Parent=Nokia

[Nokia????/4.* Series60/* Profile/MIDP-?.? Configuration/CLDC-?.?*]
Parent=Nokia

[Nokia?????/* (*) Profile/MIDP-?.? Configuration/CLDC-?.?*]
Parent=Nokia

[Nokia7650/* SymbianOS/* Series60/*]
Parent=Nokia
Platform=SymbianOS
Frames=true
JavaScript=true

[NokiaN70-1/*/SN* Series60/* Profile/MIDP-?.? Configuration/CLDC-?.?*]
Parent=Nokia
Frames=true
JavaScript=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Obigo

[Obigo]
Parent=DefaultProperties
Browser="Obigo"
Frames=true
Tables=true
Cookies=true
JavaScript=true
WAP=true
isMobileDevice=true

[AU-MIC/* MMP/*]
Parent=Obigo

[LG-LX??? AU-MIC-LX??0/* MMP/*]
Parent=Obigo

[Samsung-SPHA* AU-MIC* MMP/*]
Parent=Obigo

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Openwave Mobile Browser

[Openwave Mobile Browser]
Parent=DefaultProperties
Browser="Openwave Mobile Browser"
Alpha=true
Win32=true
Win64=true
Frames=true
Tables=true
Cookies=true
WAP=true
isMobileDevice=true
isSyndicationReader=true

[*UP.Browser/*]
Parent=Openwave Mobile Browser

[*UP.Link/*]
Parent=Openwave Mobile Browser

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera

[Opera]
Parent=DefaultProperties
Browser="Opera"
Platform=SymbianOS
Frames=true
Tables=true
Cookies=true
JavaScript=true
WAP=true
isMobileDevice=true

[Mozilla/4.* (compatible; MSIE 6.0; Symbian OS; *Opera*]
Parent=Opera
Platform=SymbianOS

[Mozilla/4.* (compatible; MSIE 6.0; SymbianOS; *Opera*]
Parent=Opera

[Opera/* (*Opera Mini/1.0*)*]
Parent=Opera
Version=1.0
MajorVer=1
MinorVer=0

[Opera/* (*Opera Mini/1.1*)*]
Parent=Opera
Version=1.1
MajorVer=1
MinorVer=1

[Opera/* (*Opera Mini/1.2*)*]
Parent=Opera
Version=1.2
MajorVer=1
MinorVer=2

[Opera/* (*Opera Mini/2.0*)*]
Parent=Opera
Version=2.0
MajorVer=2
MinorVer=0
CSS=1
CssVersion=1
supportsCSS=true

[Opera/* (*Opera Mini/3.0*)*]
Parent=Opera
Version=3.0
MajorVer=3
MinorVer=0

[Opera/* (Nintendo Wii*)]
Parent=Opera
Browser="Wii Web Browser"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Playstation

[Playstation]
Parent=DefaultProperties
Browser="Playstation"
Platform=WAP
Frames=true
Tables=true
Cookies=true
WAP=true
isMobileDevice=true

[Mozilla/4.0 (PSP (PlayStation Portable); 2.00)]
Parent=Playstation
Version=2.0
MajorVer=2
MinorVer=0

[Mozilla/5.0 (PLAYSTATION 3; 1.00)]
Parent=Playstation
Browser="PlayStation 3"
Version=1.0
MajorVer=1
MinorVer=1
Frames=false

[Sony PS2 (Linux)]
Parent=Playstation
Browser="Sony PS2"
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Pocket PC

[Pocket PC]
Parent=DefaultProperties
Browser="Pocket PC"
Platform=WinCE
Win32=true
Frames=true
Tables=true
Cookies=true
JavaScript=true
ActiveXControls=true
WAP=true
isMobileDevice=true
CSS=1
CssVersion=1
supportsCSS=true

[HTC-*/* Mozilla/4.0 (compatible; MSIE 5.5; Windows CE*)*]
Parent=Pocket PC
Version=5.5
MajorVer=5
MinorVer=5
Win32=true

[HTC-*/* Mozilla/4.0 (compatible; MSIE 6.0; Windows CE*)*]
Parent=Pocket PC
Version=6.0
MajorVer=6
MinorVer=0
Win32=true

[Mozilla/1.1 (compatible; MSPIE 2.0; *Windows CE*)*]
Parent=Pocket PC
Version=2.0
MajorVer=2
MinorVer=0
Win32=true

[Mozilla/2.0 (compatible; MSIE 3.0*; *Windows CE*)*]
Parent=Pocket PC
Version=3.0
MajorVer=3
MinorVer=0
Win32=true

[Mozilla/4.0 (compatible; MSIE 4.0*; *Windows CE*)*]
Parent=Pocket PC
Version=4.01
MajorVer=4
MinorVer=01
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.5*; Windows CE*)*]
Parent=Pocket PC
Version=5.5
MajorVer=5
MinorVer=5
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0*; Windows CE*)*]
Parent=Pocket PC
Version=6.0
MajorVer=6
MinorVer=0
Win32=true

[Mozilla/4.0 (compatible; MSIE 7.0; Windows CE*)*]
Parent=Pocket PC
Version=7.0
MajorVer=7
MinorVer=0
Beta=true
Win32=true

[SIE-*/* (compatible; MSIE 4.01; Windows CE; PPC; 240x320)]
Parent=Pocket PC

[T-Mobile Dash Mozilla/4.0 (compatible; MSIE 4.*; Windows CE; Smartphone; 320x240)]
Parent=Pocket PC

[Vodafone/*/Mozilla/4.0 (compatible; MSIE*; Windows CE;*)*]
Parent=Pocket PC

[Windows CE (Pocket PC) - Version 4.2*]
Parent=Pocket PC
Version=4.01
MajorVer=4
MinorVer=01
Win32=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; SEMC Browser

[SEMC Browser]
Parent=DefaultProperties
Browser="SEMC Browser"
Platform=JAVA
Tables=true
WAP=true
isMobileDevice=true
CSS=1
CssVersion=1
supportsCSS=true

[*SEMC-Browser/*]
Parent=SEMC Browser

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; SonyEricsson

[SonyEricsson]
Parent=DefaultProperties
Browser="SonyEricsson"
Frames=true
Tables=true
Cookies=true
JavaScript=true
WAP=true
isMobileDevice=true

[Ericsson*]
Parent=SonyEricsson

[SonyEricsson*]
Parent=SonyEricsson

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netbox

[Netbox]
Parent=DefaultProperties
Browser="Netbox"
Frames=true
Tables=true
Cookies=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/3.01 (compatible; Netbox/*; Linux*)]
Parent=Netbox
Browser="Netbox"
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; PowerTV

[PowerTV]
Parent=DefaultProperties
Browser="PowerTV"
Platform=PowerTV
Frames=true
Tables=true
Cookies=true
JavaScript=true

[Mozilla/4.0 PowerTV/1.5 (Compatible; Spyglass DM 3.2.1, EXPLORER)]
Parent=PowerTV
Version=1.5
MajorVer=1
MinorVer=5

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; WebTV/MSNTV

[WebTV]
Parent=DefaultProperties
Browser="WebTV/MSNTV"
Platform=WebTV
Frames=true
Tables=true
Cookies=true
JavaScript=true

[Mozilla/3.0 WebTV/1.*(compatible; MSIE 2.0)]
Parent=WebTV
Version=1.0
MajorVer=1
MinorVer=0

[Mozilla/4.0 WebTV/2.0*(compatible; MSIE 3.0)]
Parent=WebTV
Version=2.0
MajorVer=2
MinorVer=0

[Mozilla/4.0 WebTV/2.1*(compatible; MSIE 3.0)]
Parent=WebTV
Version=2.1
MajorVer=2
MinorVer=1

[Mozilla/4.0 WebTV/2.2*(compatible; MSIE 3.0)]
Parent=WebTV
Version=2.2
MajorVer=2
MinorVer=2

[Mozilla/4.0 WebTV/2.3*(compatible; MSIE 3.0)]
Parent=WebTV
Version=2.3
MajorVer=2
MinorVer=3

[Mozilla/4.0 WebTV/2.4*(compatible; MSIE 3.0)]
Parent=WebTV
Version=2.4
MajorVer=2
MinorVer=4

[Mozilla/4.0 WebTV/2.5*(compatible; MSIE 4.0)]
Parent=WebTV
Version=2.5
MajorVer=2
MinorVer=5
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/4.0 WebTV/2.6*(compatible; MSIE 4.0)]
Parent=WebTV
Version=2.6
MajorVer=2
MinorVer=6
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/4.0 WebTV/2.7*(compatible; MSIE 4.0)]
Parent=WebTV
Version=2.7
MajorVer=2
MinorVer=7
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/4.0 WebTV/2.8*(compatible; MSIE 4.0)]
Parent=WebTV
Version=2.8
MajorVer=2
MinorVer=8
JavaApplets=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/4.0 WebTV/2.9*(compatible; MSIE 4.0)]
Parent=WebTV
Version=2.9
MajorVer=2
MinorVer=9
JavaApplets=true
CSS=1
CssVersion=1
supportsCSS=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Amaya

[Amaya]
Parent=DefaultProperties
Browser="Amaya"
Tables=true
Cookies=true

[amaya/7.*]
Parent=Amaya
Version=7.0
MajorVer=7
MinorVer=0

[amaya/8.0*]
Parent=Amaya
Version=8.0
MajorVer=8
MinorVer=0
CSS=2
CssVersion=2
supportsCSS=true

[amaya/8.1*]
Parent=Amaya
Version=8.1
MajorVer=8
MinorVer=1
CSS=2
CssVersion=2
supportsCSS=true

[amaya/8.2*]
Parent=Amaya
Version=8.2
MajorVer=8
MinorVer=2
CSS=2
CssVersion=2
supportsCSS=true

[amaya/8.3*]
Parent=Amaya
Version=8.3
MajorVer=8
MinorVer=3
CSS=2
CssVersion=2
supportsCSS=true

[amaya/8.4*]
Parent=Amaya
Version=8.4
MajorVer=8
MinorVer=4
CSS=2
CssVersion=2
supportsCSS=true

[amaya/8.5*]
Parent=Amaya
Version=8.5
MajorVer=8
MinorVer=5
CSS=2
CssVersion=2
supportsCSS=true

[amaya/8.6*]
Parent=Amaya
Version=8.6
MajorVer=8
MinorVer=6
CSS=2
CssVersion=2
supportsCSS=true

[amaya/8.7*]
Parent=Amaya
Version=8.7
MajorVer=8
MinorVer=7
CSS=2
CssVersion=2
supportsCSS=true

[amaya/8.8*]
Parent=Amaya
Version=8.8
MajorVer=8
MinorVer=8
CSS=2
CssVersion=2
supportsCSS=true

[amaya/8.9*]
Parent=Amaya
Version=8.9
MajorVer=8
MinorVer=9
CSS=2
CssVersion=2
supportsCSS=true

[amaya/9.0*]
Parent=Amaya
Version=9.0
MajorVer=8
MinorVer=0
CSS=2
CssVersion=2
supportsCSS=true

[amaya/9.1*]
Parent=Amaya
Version=9.1
MajorVer=9
MinorVer=1
CSS=2
CssVersion=2
supportsCSS=true

[amaya/9.2*]
Parent=Amaya
Version=9.2
MajorVer=9
MinorVer=2
CSS=2
CssVersion=2
supportsCSS=true

[amaya/9.3*]
Parent=Amaya
Version=9.3
MajorVer=9
MinorVer=3

[amaya/9.4*]
Parent=Amaya
Version=9.4
MajorVer=9
MinorVer=4

[amaya/9.5*]
Parent=Amaya
Version=9.5
MajorVer=9
MinorVer=5

[Emacs-w3m/*]
Parent=Emacs/W3

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Links

[Links]
Parent=DefaultProperties
Browser="Links"
Frames=true
Tables=true

[Links (0.9*; CYGWIN_NT-5.1*)]
Parent=Links
Browser="Links"
Version=0.9
MajorVer=0
MinorVer=9
Platform=WinXP

[Links (0.9*; Darwin*)]
Parent=Links
Version=0.9
MajorVer=0
MinorVer=9
Platform=MacPPC

[Links (0.9*; FreeBSD*)]
Parent=Links
Browser="Links"
Version=0.9
MajorVer=0
MinorVer=9
Platform=FreeBSD

[Links (0.9*; Linux*)]
Parent=Links
Browser="Links"
Version=0.9
MajorVer=0
MinorVer=9
Platform=Linux

[Links (0.9*; OS/2*)]
Parent=Links
Browser="Links"
Version=0.9
MajorVer=0
MinorVer=9
Platform=OS/2

[Links (0.9*; Unix*)]
Parent=Links
Browser="Links"
Version=0.9
MajorVer=0
MinorVer=9
Platform=Unix

[Links (0.9*; Win32*)]
Parent=Links
Browser="Links"
Version=0.9
MajorVer=0
MinorVer=9
Platform=Win32
Win32=true

[Links (1.0*; CYGWIN_NT-5.1*)]
Parent=Links
Browser="Links"
Version=1.0
MajorVer=1
MinorVer=0
Platform=WinXP

[Links (1.0*; FreeBSD*)]
Parent=Links
Browser="Links"
Version=1.0
MajorVer=1
MinorVer=0
Platform=FreeBSD

[Links (1.0*; Linux*)]
Parent=Links
Browser="Links"
Version=1.0
MajorVer=1
MinorVer=0
Platform=Linux

[Links (1.0*; OS/2*)]
Parent=Links
Browser="Links"
Version=1.0
MajorVer=1
MinorVer=0
Platform=OS/2

[Links (1.0*; Unix*)]
Parent=Links
Browser="Links"
Version=1.0
MajorVer=1
MinorVer=0
Platform=Unix

[Links (1.0*; Win32*)]
Parent=Links
Browser="Links"
Version=1.0
MajorVer=1
MinorVer=0
Platform=Win32
Win32=true

[Links (2.0*; Linux*)]
Parent=Links
Browser="Links"
Version=2.0
MajorVer=2
MinorVer=0
Platform=Linux

[Links (2.1*; FreeBSD*)]
Parent=Links
Browser="Links"
Version=2.1
MajorVer=2
MinorVer=1
Platform=FreeBSD

[Links (2.1*; Linux *)]
Parent=Links
Browser="Links"
Version=2.1
MajorVer=2
MinorVer=1
Platform=Linux

[Links (2.1*; OpenBSD*)]
Parent=Links
Browser="Links"
Version=2.1
MajorVer=2
MinorVer=1
Platform=OpenBSD

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Lynx

[Lynx]
Parent=DefaultProperties
Browser="Lynx"
Frames=true
Tables=true

[Lynx *]
Parent=Lynx
Browser="Lynx"

[Lynx/2.3*]
Parent=Lynx
Browser="Lynx"
Version=2.3
MajorVer=2
MinorVer=3

[Lynx/2.4*]
Parent=Lynx
Browser="Lynx"
Version=2.4
MajorVer=2
MinorVer=4

[Lynx/2.5*]
Parent=Lynx
Browser="Lynx"
Version=2.5
MajorVer=2
MinorVer=5

[Lynx/2.6*]
Parent=Lynx
Browser="Lynx"
Version=2.6
MajorVer=2
MinorVer=6

[Lynx/2.7*]
Parent=Lynx
Browser="Lynx"
Version=2.7
MajorVer=2
MinorVer=7

[Lynx/2.8*]
Parent=Lynx
Browser="Lynx"
Version=2.8
MajorVer=2
MinorVer=8

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; w3m

[w3m]
Parent=DefaultProperties
Browser="w3m"
Frames=true
Tables=true

[w3m/0.1*]
Parent=w3m
Browser="w3m"
Version=0.1
MajorVer=0
MinorVer=1

[w3m/0.2*]
Parent=w3m
Browser="w3m"
Version=0.2
MajorVer=0
MinorVer=2

[w3m/0.3*]
Parent=w3m
Browser="w3m"
Version=0.3
MajorVer=0
MinorVer=3

[w3m/0.4*]
Parent=w3m
Browser="w3m"
Version=0.4
MajorVer=0
MinorVer=4
Cookies=true

[w3m/0.5*]
Parent=w3m
Browser="w3m"
Version=0.5
MajorVer=0
MinorVer=5
Cookies=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; ELinks 0.10

[ELinks 0.10]
Parent=DefaultProperties
Browser="ELinks 0.10"
Version=0.10
MinorVer=10
Frames=true
Tables=true

[ELinks (0.10*; *AIX*)]
Parent=ELinks 0.10
Platform=AIX

[ELinks (0.10*; *BeOS*)]
Parent=ELinks 0.10
Platform=BeOS

[ELinks (0.10*; *CygWin*)]
Parent=ELinks 0.10
Platform=CygWin

[ELinks (0.10*; *Darwin*)]
Parent=ELinks 0.10
Platform=Darwin

[ELinks (0.10*; *Digital Unix*)]
Parent=ELinks 0.10
Platform=Digital Unix

[ELinks (0.10*; *FreeBSD*)]
Parent=ELinks 0.10
Platform=FreeBSD

[ELinks (0.10*; *HPUX*)]
Parent=ELinks 0.10
Platform=HP-UX

[ELinks (0.10*; *IRIX*)]
Parent=ELinks 0.10
Platform=IRIX

[ELinks (0.10*; *Linux*)]
Parent=ELinks 0.10
Platform=Linux

[ELinks (0.10*; *NetBSD*)]
Parent=ELinks 0.10
Platform=NetBSD

[ELinks (0.10*; *OpenBSD*)]
Parent=ELinks 0.10
Platform=OpenBSD

[ELinks (0.10*; *OS/2*)]
Parent=ELinks 0.10
Platform=OS/2

[ELinks (0.10*; *RISC*)]
Parent=ELinks 0.10
Platform=RISC OS

[ELinks (0.10*; *Solaris*)]
Parent=ELinks 0.10
Platform=Solaris

[ELinks (0.10*; *Unix*)]
Parent=ELinks 0.10
Platform=Unix

[ELinks/0.10* (*AIX*)]
Parent=ELinks 0.10
Platform=AIX

[ELinks/0.10* (*BeOS*)]
Parent=ELinks 0.10
Platform=BeOS

[ELinks/0.10* (*CygWin*)]
Parent=ELinks 0.10
Platform=CygWin

[ELinks/0.10* (*Darwin*)]
Parent=ELinks 0.10
Platform=Darwin

[ELinks/0.10* (*Digital Unix*)]
Parent=ELinks 0.10
Platform=Digital Unix

[ELinks/0.10* (*FreeBSD*)]
Parent=ELinks 0.10
Platform=FreeBSD

[ELinks/0.10* (*HPUX*)]
Parent=ELinks 0.10
Platform=HP-UX

[ELinks/0.10* (*IRIX*)]
Parent=ELinks 0.10
Platform=IRIX

[ELinks/0.10* (*Linux*)]
Parent=ELinks 0.10
Platform=Linux

[ELinks/0.10* (*NetBSD*)]
Parent=ELinks 0.10
Platform=NetBSD

[ELinks/0.10* (*OpenBSD*)]
Parent=ELinks 0.10
Platform=OpenBSD

[ELinks/0.10* (*OS/2*)]
Parent=ELinks 0.10
Platform=OS/2

[ELinks/0.10* (*RISC*)]
Parent=ELinks 0.10
Platform=RISC OS

[ELinks/0.10* (*Solaris*)]
Parent=ELinks 0.10
Platform=Solaris

[ELinks/0.10* (*Unix*)]
Parent=ELinks 0.10
Platform=Unix

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; ELinks 0.11

[ELinks 0.11]
Parent=DefaultProperties
Browser="ELinks 0.11"
Version=0.11
MinorVer=11
Frames=true
Tables=true

[ELinks (0.11*; *AIX*)]
Parent=ELinks 0.11
Platform=AIX

[ELinks (0.11*; *BeOS*)]
Parent=ELinks 0.11
Platform=BeOS

[ELinks (0.11*; *CygWin*)]
Parent=ELinks 0.11
Platform=CygWin

[ELinks (0.11*; *Darwin*)]
Parent=ELinks 0.11
Platform=Darwin

[ELinks (0.11*; *Digital Unix*)]
Parent=ELinks 0.11
Platform=Digital Unix

[ELinks (0.11*; *FreeBSD*)]
Parent=ELinks 0.11
Platform=FreeBSD

[ELinks (0.11*; *HPUX*)]
Parent=ELinks 0.11
Platform=HP-UX

[ELinks (0.11*; *IRIX*)]
Parent=ELinks 0.11
Platform=IRIX

[ELinks (0.11*; *Linux*)]
Parent=ELinks 0.11
Platform=Linux

[ELinks (0.11*; *NetBSD*)]
Parent=ELinks 0.11
Platform=NetBSD

[ELinks (0.11*; *OpenBSD*)]
Parent=ELinks 0.11
Platform=OpenBSD

[ELinks (0.11*; *OS/2*)]
Parent=ELinks 0.11
Platform=OS/2

[ELinks (0.11*; *RISC*)]
Parent=ELinks 0.11
Platform=RISC OS

[ELinks (0.11*; *Solaris*)]
Parent=ELinks 0.11
Platform=Solaris

[ELinks (0.11*; *Unix*)]
Parent=ELinks 0.11
Platform=Unix

[ELinks/0.11* (*AIX*)]
Parent=ELinks 0.11
Platform=AIX

[ELinks/0.11* (*BeOS*)]
Parent=ELinks 0.11
Platform=BeOS

[ELinks/0.11* (*CygWin*)]
Parent=ELinks 0.11
Platform=CygWin

[ELinks/0.11* (*Darwin*)]
Parent=ELinks 0.11
Platform=Darwin

[ELinks/0.11* (*Digital Unix*)]
Parent=ELinks 0.11
Platform=Digital Unix

[ELinks/0.11* (*FreeBSD*)]
Parent=ELinks 0.11
Platform=FreeBSD

[ELinks/0.11* (*HPUX*)]
Parent=ELinks 0.11
Platform=HP-UX

[ELinks/0.11* (*IRIX*)]
Parent=ELinks 0.11
Platform=IRIX

[ELinks/0.11* (*Linux*)]
Parent=ELinks 0.11
Platform=Linux

[ELinks/0.11* (*NetBSD*)]
Parent=ELinks 0.11
Platform=NetBSD

[ELinks/0.11* (*OpenBSD*)]
Parent=ELinks 0.11
Platform=OpenBSD

[ELinks/0.11* (*OS/2*)]
Parent=ELinks 0.11
Platform=OS/2

[ELinks/0.11* (*RISC*)]
Parent=ELinks 0.11
Platform=RISC OS

[ELinks/0.11* (*Solaris*)]
Parent=ELinks 0.11
Platform=Solaris

[ELinks/0.11* (*Unix*)]
Parent=ELinks 0.11
Platform=Unix

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; ELinks 0.12

[ELinks 0.12]
Parent=DefaultProperties
Browser="ELinks"
Version=0.12
MinorVer=12
Frames=true
Tables=true

[ELinks (0.12*; *AIX*)]
Parent=ELinks 0.12
Platform=AIX

[ELinks (0.12*; *BeOS*)]
Parent=ELinks 0.12
Platform=BeOS

[ELinks (0.12*; *CygWin*)]
Parent=ELinks 0.12
Platform=CygWin

[ELinks (0.12*; *Darwin*)]
Parent=ELinks 0.12
Platform=Darwin

[ELinks (0.12*; *Digital Unix*)]
Parent=ELinks 0.12
Platform=Digital Unix

[ELinks (0.12*; *FreeBSD*)]
Parent=ELinks 0.12
Platform=FreeBSD

[ELinks (0.12*; *HPUX*)]
Parent=ELinks 0.12
Platform=HP-UX

[ELinks (0.12*; *IRIX*)]
Parent=ELinks 0.12
Platform=IRIX

[ELinks (0.12*; *Linux*)]
Parent=ELinks 0.12
Platform=Linux

[ELinks (0.12*; *NetBSD*)]
Parent=ELinks 0.12
Platform=NetBSD

[ELinks (0.12*; *OpenBSD*)]
Parent=ELinks 0.12
Platform=OpenBSD

[ELinks (0.12*; *OS/2*)]
Parent=ELinks 0.12
Platform=OS/2

[ELinks (0.12*; *RISC*)]
Parent=ELinks 0.12
Platform=RISC OS

[ELinks (0.12*; *Solaris*)]
Parent=ELinks 0.12
Platform=Solaris

[ELinks (0.12*; *Unix*)]
Parent=ELinks 0.12
Platform=Unix

[ELinks/0.12* (*AIX*)]
Parent=ELinks 0.12
Platform=AIX

[ELinks/0.12* (*BeOS*)]
Parent=ELinks 0.12
Platform=BeOS

[ELinks/0.12* (*CygWin*)]
Parent=ELinks 0.12
Platform=CygWin

[ELinks/0.12* (*Darwin*)]
Parent=ELinks 0.12
Platform=Darwin

[ELinks/0.12* (*Digital Unix*)]
Parent=ELinks 0.12
Platform=Digital Unix

[ELinks/0.12* (*FreeBSD*)]
Parent=ELinks 0.12
Platform=FreeBSD

[ELinks/0.12* (*HPUX*)]
Parent=ELinks 0.12
Platform=HP-UX

[ELinks/0.12* (*IRIX*)]
Parent=ELinks 0.12
Platform=IRIX

[ELinks/0.12* (*Linux*)]
Parent=ELinks 0.12
Platform=Linux

[ELinks/0.12* (*NetBSD*)]
Parent=ELinks 0.12
Platform=NetBSD

[ELinks/0.12* (*OpenBSD*)]
Parent=ELinks 0.12
Platform=OpenBSD

[ELinks/0.12* (*OS/2*)]
Parent=ELinks 0.12
Platform=OS/2

[ELinks/0.12* (*RISC*)]
Parent=ELinks 0.12
Platform=RISC OS

[ELinks/0.12* (*Solaris*)]
Parent=ELinks 0.12
Platform=Solaris

[ELinks/0.12* (*Unix*)]
Parent=ELinks 0.12
Platform=Unix

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; ELinks 0.9

[ELinks 0.9]
Parent=DefaultProperties
Browser="ELinks 0.9"
Version=0.9
MinorVer=9
Frames=true
Tables=true

[ELinks (0.9*; *AIX*)]
Parent=ELinks 0.9
Platform=AIX

[ELinks (0.9*; *BeOS*)]
Parent=ELinks 0.9
Platform=BeOS

[ELinks (0.9*; *CygWin*)]
Parent=ELinks 0.9
Platform=CygWin

[ELinks (0.9*; *Darwin*)]
Parent=ELinks 0.9
Platform=Darwin

[ELinks (0.9*; *Digital Unix*)]
Parent=ELinks 0.9
Platform=Digital Unix

[ELinks (0.9*; *FreeBSD*)]
Parent=ELinks 0.9
Platform=FreeBSD

[ELinks (0.9*; *HPUX*)]
Parent=ELinks 0.9
Platform=HP-UX

[ELinks (0.9*; *IRIX*)]
Parent=ELinks 0.9
Platform=IRIX

[ELinks (0.9*; *Linux*)]
Parent=ELinks 0.9
Platform=Linux

[ELinks (0.9*; *NetBSD*)]
Parent=ELinks 0.9
Platform=NetBSD

[ELinks (0.9*; *OpenBSD*)]
Parent=ELinks 0.9
Platform=OpenBSD

[ELinks (0.9*; *OS/2*)]
Parent=ELinks 0.9
Platform=OS/2

[ELinks (0.9*; *RISC*)]
Parent=ELinks 0.9
Platform=RISC OS

[ELinks (0.9*; *Solaris*)]
Parent=ELinks 0.9
Platform=Solaris

[ELinks (0.9*; *Unix*)]
Parent=ELinks 0.9
Platform=Unix

[ELinks/0.9* (*AIX*)]
Parent=ELinks 0.9
Platform=AIX

[ELinks/0.9* (*BeOS*)]
Parent=ELinks 0.9
Platform=BeOS

[ELinks/0.9* (*CygWin*)]
Parent=ELinks 0.9
Platform=CygWin

[ELinks/0.9* (*Darwin*)]
Parent=ELinks 0.9
Platform=Darwin

[ELinks/0.9* (*Digital Unix*)]
Parent=ELinks 0.9
Platform=Digital Unix

[ELinks/0.9* (*FreeBSD*)]
Parent=ELinks 0.9
Platform=FreeBSD

[ELinks/0.9* (*HPUX*)]
Parent=ELinks 0.9
Platform=HP-UX

[ELinks/0.9* (*IRIX*)]
Parent=ELinks 0.9
Platform=IRIX

[ELinks/0.9* (*Linux*)]
Parent=ELinks 0.9
Platform=Linux

[ELinks/0.9* (*NetBSD*)]
Parent=ELinks 0.9
Platform=NetBSD

[ELinks/0.9* (*OpenBSD*)]
Parent=ELinks 0.9
Platform=OpenBSD

[ELinks/0.9* (*OS/2*)]
Parent=ELinks 0.9
Platform=OS/2

[ELinks/0.9* (*RISC*)]
Parent=ELinks 0.9
Platform=RISC OS

[ELinks/0.9* (*Solaris*)]
Parent=ELinks 0.9
Platform=Solaris

[ELinks/0.9* (*Unix*)]
Parent=ELinks 0.9
Platform=Unix

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; ELinks

[ELinks ]
Parent=DefaultProperties
Browser="ELinks"
Frames=true
Tables=true

[ELinks (*; *AIX*)]
Parent=ELinks
Platform=AIX

[ELinks (*; *BeOS*)]
Parent=ELinks
Platform=BeOS

[ELinks (*; *CygWin*)]
Parent=ELinks
Platform=CygWin

[ELinks (*; *Darwin*)]
Parent=ELinks
Platform=Darwin

[ELinks (*; *Digital Unix*)]
Parent=ELinks
Platform=Digital Unix

[ELinks (*; *FreeBSD*)]
Parent=ELinks
Platform=FreeBSD

[ELinks (*; *HPUX*)]
Parent=ELinks
Platform=HP-UX

[ELinks (*; *IRIX*)]
Parent=ELinks
Platform=IRIX

[ELinks (*; *Linux*)]
Parent=ELinks
Platform=Linux

[ELinks (*; *NetBSD*)]
Parent=ELinks
Platform=NetBSD

[ELinks (*; *OpenBSD*)]
Parent=ELinks
Platform=OpenBSD

[ELinks (*; *OS/2*)]
Parent=ELinks
Platform=OS/2

[ELinks (*; *RISC*)]
Parent=ELinks
Platform=RISC OS

[ELinks (*; *Solaris*)]
Parent=ELinks
Platform=Solaris

[ELinks (*; *Unix*)]
Parent=ELinks
Platform=Unix

[ELinks/* (*AIX*)]
Parent=ELinks
Platform=AIX

[ELinks/* (*BeOS*)]
Parent=ELinks
Platform=BeOS

[ELinks/* (*CygWin*)]
Parent=ELinks
Platform=CygWin

[ELinks/* (*Darwin*)]
Parent=ELinks
Platform=Darwin

[ELinks/* (*Digital Unix*)]
Parent=ELinks
Platform=Digital Unix

[ELinks/* (*FreeBSD*)]
Parent=ELinks
Platform=FreeBSD

[ELinks/* (*HPUX*)]
Parent=ELinks
Platform=HP-UX

[ELinks/* (*IRIX*)]
Parent=ELinks
Platform=IRIX

[ELinks/* (*Linux*)]
Parent=ELinks
Platform=Linux

[ELinks/* (*NetBSD*)]
Parent=ELinks
Platform=NetBSD

[ELinks/* (*OpenBSD*)]
Parent=ELinks
Platform=OpenBSD

[ELinks/* (*OS/2*)]
Parent=ELinks
Platform=OS/2

[ELinks/* (*RISC*)]
Parent=ELinks
Platform=RISC OS

[ELinks/* (*Solaris*)]
Parent=ELinks
Platform=Solaris

[ELinks/* (*Unix*)]
Parent=ELinks
Platform=Unix

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; AppleWebKit

[AppleWebKit]
Parent=DefaultProperties
Browser="AppleWebKit"
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (KHTML, like Gecko)]
Parent=AppleWebKit

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Camino

[Camino]
Parent=DefaultProperties
Browser="Camino"
Platform=MacOSX
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; *Mac OS X*) Gecko/* Camino/0.7*]
Parent=Camino
Version=0.7
MajorVer=0
MinorVer=7
Beta=true

[Mozilla/5.0 (Macintosh; *Mac OS X*) Gecko/* Camino/0.8*]
Parent=Camino
Version=0.8
MajorVer=0
MinorVer=8
Beta=true

[Mozilla/5.0 (Macintosh; *Mac OS X*) Gecko/* Camino/0.9*]
Parent=Camino
Version=0.9
MajorVer=0
MinorVer=9
Beta=true

[Mozilla/5.0 (Macintosh; *Mac OS X*) Gecko/* Camino/1.0*]
Parent=Camino
Version=1.0
MajorVer=1
MinorVer=0

[Mozilla/5.0 (Macintosh; *Mac OS X*) Gecko/* Camino/1.2*]
Parent=Camino
Version=1.2
MajorVer=1
MinorVer=2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Chimera

[Chimera]
Parent=DefaultProperties
Browser="Chimera"
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true

[Mozilla/5.0 (Macintosh; U; *Mac OS X*; *; rv:1.*) Gecko/* Chimera/*]
Parent=Chimera
Platform=MacOSX

[Mozilla/5.0 Gecko/* Chimera/*]
Parent=Chimera

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Dillo

[Dillo]
Parent=DefaultProperties
Browser="Dillo"
Platform=Linux
Frames=true
IFrames=true
Tables=true
Cookies=true
CSS=2
CssVersion=2
supportsCSS=true

[Dillo/0.6*]
Parent=Dillo
Version=0.6
MajorVer=0
MinorVer=6

[Dillo/0.7*]
Parent=Dillo
Version=0.7
MajorVer=0
MinorVer=7

[Dillo/0.8*]
Parent=Dillo
Version=0.8
MajorVer=0
MinorVer=8

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Emacs/W3

[Emacs/W3]
Parent=DefaultProperties
Browser="Emacs/W3"
Frames=true
Tables=true
Cookies=true

[Emacs/W3/2.* (Unix*]
Parent=Emacs/W3
Version=2.0
MajorVer=2
MinorVer=0
Platform=Unix

[Emacs/W3/2.* (X11*]
Parent=Emacs/W3
Version=2.0
MajorVer=2
MinorVer=0
Platform=Linux

[Emacs/W3/3.* (Unix*]
Parent=Emacs/W3
Version=3.0
MajorVer=3
MinorVer=0
Platform=Unix

[Emacs/W3/3.* (X11*]
Parent=Emacs/W3
Version=3.0
MajorVer=3
MinorVer=0
Platform=Linux

[Emacs/W3/4.* (Unix*]
Parent=Emacs/W3
Version=4.0
MajorVer=4
MinorVer=0
Platform=Unix

[Emacs/W3/4.* (X11*]
Parent=Emacs/W3
Version=4.0
MajorVer=4
MinorVer=0
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; fantomas

[fantomas]
Parent=DefaultProperties
Browser="fantomas"
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaScript=true

[Mozilla/4.0 (cloakBrowser)]
Parent=fantomas
Browser="fantomas cloakBrowser"

[Mozilla/4.0 (fantomas shadowMaker Browser)]
Parent=fantomas
Browser="fantomas shadowMaker Browser"

[Mozilla/4.0 (fantomBrowser)]
Parent=fantomas
Browser="fantomas fantomBrowser"

[Mozilla/4.0 (fantomCrew Browser)]
Parent=fantomas
Browser="fantomas fantomCrew Browser"

[Mozilla/4.0 (stealthBrowser)]
Parent=fantomas
Browser="fantomas stealthBrowser"

[multiBlocker browser*]
Parent=fantomas
Browser="fantomas multiBlocker browser"

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; FrontPage

[FrontPage]
Parent=DefaultProperties
Browser="FrontPage"
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaScript=true

[Mozilla/?* (compatible; MS FrontPage*)]
Parent=FrontPage

[MSFrontPage/*]
Parent=FrontPage

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Galeon

[Galeon]
Parent=DefaultProperties
Browser="Galeon"
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (X11; U; Linux*) Gecko/* Galeon/1.0*]
Parent=Galeon
Version=1.0
MajorVer=1
MinorVer=0
Platform=Linux

[Mozilla/5.0 (X11; U; Linux*) Gecko/* Galeon/1.1*]
Parent=Galeon
Version=1.1
MajorVer=1
MinorVer=1
Platform=Linux

[Mozilla/5.0 (X11; U; Linux*) Gecko/* Galeon/1.2*]
Parent=Galeon
Version=1.2
MajorVer=1
MinorVer=2
Platform=Linux

[Mozilla/5.0 (X11; U; Linux*) Gecko/* Galeon/1.3*]
Parent=Galeon
Version=1.3
MajorVer=1
MinorVer=3
Platform=Linux

[Mozilla/5.0 (X11; U; Linux*; Debian/*) Gecko/* Galeon/1.0*]
Parent=Galeon
Version=1.0
MajorVer=1
MinorVer=0
Platform=Debian

[Mozilla/5.0 (X11; U; Linux*; Debian/*) Gecko/* Galeon/1.1*]
Parent=Galeon
Version=1.1
MajorVer=1
MinorVer=1
Platform=Debian

[Mozilla/5.0 (X11; U; Linux*; Debian/*) Gecko/* Galeon/1.2*]
Parent=Galeon
Version=1.2
MajorVer=1
MinorVer=2
Platform=Debian

[Mozilla/5.0 (X11; U; Linux*; Debian/*) Gecko/* Galeon/1.3*]
Parent=Galeon
Version=1.3
MajorVer=1
MinorVer=3
Platform=Debian

[Mozilla/5.0 Galeon/1.0* (X11; Linux*)*]
Parent=Galeon
Version=1.0
MajorVer=1
MinorVer=0
Platform=Linux

[Mozilla/5.0 Galeon/1.1* (X11; Linux*)*]
Parent=Galeon
Version=1.1
MajorVer=1
MinorVer=1
Platform=Linux

[Mozilla/5.0 Galeon/1.2* (X11; Linux*)*]
Parent=Galeon
Version=1.2
MajorVer=1
MinorVer=2
Platform=Linux

[Mozilla/5.0 Galeon/1.3* (X11; Linux*)*]
Parent=Galeon
Version=1.3
MajorVer=1
MinorVer=3
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; HP Secure Web Browser

[HP Secure Web Browser]
Parent=DefaultProperties
Browser="HP Secure Web Browser"
Platform=OpenVMS
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (X11; U; OpenVMS*; *; rv:1.0*) Gecko/*]
Parent=HP Secure Web Browser
Version=1.0
MajorVer=1
MinorVer=0

[Mozilla/5.0 (X11; U; OpenVMS*; *; rv:1.1*) Gecko/*]
Parent=HP Secure Web Browser
Version=1.1
MajorVer=1
MinorVer=1

[Mozilla/5.0 (X11; U; OpenVMS*; *; rv:1.2*) Gecko/*]
Parent=HP Secure Web Browser
Version=1.2
MajorVer=1
MinorVer=2

[Mozilla/5.0 (X11; U; OpenVMS*; *; rv:1.3*) Gecko/*]
Parent=HP Secure Web Browser
Version=1.3
MajorVer=1
MinorVer=3

[Mozilla/5.0 (X11; U; OpenVMS*; *; rv:1.4*) Gecko/*]
Parent=HP Secure Web Browser
Version=1.4
MajorVer=1
MinorVer=4

[Mozilla/5.0 (X11; U; OpenVMS*; *; rv:1.5*) Gecko/*]
Parent=HP Secure Web Browser
Version=1.5
MajorVer=1
MinorVer=5

[Mozilla/5.0 (X11; U; OpenVMS*; *; rv:1.6*) Gecko/*]
Parent=HP Secure Web Browser
Version=1.6
MajorVer=1
MinorVer=6

[Mozilla/5.0 (X11; U; OpenVMS*; *; rv:1.7*) Gecko/*]
Parent=HP Secure Web Browser
Version=1.7
MajorVer=1
MinorVer=7

[Mozilla/5.0 (X11; U; OpenVMS*; *; rv:1.8*) Gecko/*]
Parent=HP Secure Web Browser
Version=1.8
MajorVer=1
MinorVer=8

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; IBrowse

[IBrowse]
Parent=DefaultProperties
Browser="IBrowse"
Platform=Amiga
Frames=true
Tables=true
Cookies=true
JavaScript=true

[Arexx (compatible; MSIE 6.0; AmigaOS5.0) IBrowse 4.0]
Parent=IBrowse
Version=4.0
MajorVer=4
MinorVer=0

[IBrowse/1.22 (AmigaOS *)]
Parent=IBrowse
Version=1.22
MajorVer=1
MinorVer=22

[IBrowse/2.1 (AmigaOS *)]
Parent=IBrowse
Version=2.1
MajorVer=2
MinorVer=1

[IBrowse/2.2 (AmigaOS *)]
Parent=IBrowse
Version=2.2
MajorVer=2
MinorVer=2

[IBrowse/2.3 (AmigaOS *)]
Parent=IBrowse
Version=2.2
MajorVer=2
MinorVer=3

[Mozilla/* (Win98; I) IBrowse/2.1 (AmigaOS 3.1)]
Parent=IBrowse
Version=2.1
MajorVer=2
MinorVer=1

[Mozilla/* (Win98; I) IBrowse/2.2 (AmigaOS 3.1)]
Parent=IBrowse
Version=2.2
MajorVer=2
MinorVer=2

[Mozilla/* (Win98; I) IBrowse/2.3 (AmigaOS 3.1)]
Parent=IBrowse
Version=2.3
MajorVer=2
MinorVer=3

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; iCab

[iCab]
Parent=DefaultProperties
Browser="iCab"
Frames=true
Tables=true
Cookies=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

[iCab/2.7* (Macintosh; ?; 68K*)]
Parent=iCab
Version=2.7
MajorVer=2
MinorVer=7
Platform=Mac68K

[iCab/2.7* (Macintosh; ?; PPC*)]
Parent=iCab
Version=2.7
MajorVer=2
MinorVer=7
Platform=MacPPC

[iCab/2.8* (Macintosh; ?; *Mac OS X*)]
Parent=iCab
Version=2.8
MajorVer=2
MinorVer=8
Platform=MacOSX

[iCab/2.8* (Macintosh; ?; 68K*)]
Parent=iCab
Version=2.8
MajorVer=2
MinorVer=8
Platform=Mac68K

[iCab/2.8* (Macintosh; ?; PPC)]
Parent=iCab
Version=2.8
MajorVer=2
MinorVer=8
Platform=MacPPC

[iCab/2.9* (Macintosh; ?; *Mac OS X*)]
Parent=iCab
Version=2.9
MajorVer=2
MinorVer=9
Platform=MacOSX

[iCab/2.9* (Macintosh; ?; 68K*)]
Parent=iCab
Version=2.9
MajorVer=2
MinorVer=9
Platform=Mac68K

[iCab/2.9* (Macintosh; ?; PPC*)]
Parent=iCab
Version=2.9
MajorVer=2
MinorVer=9
Platform=MacPPC

[iCab/3.0* (Macintosh; ?; *Mac OS X*)]
Parent=iCab
Version=3.0
MajorVer=3
MinorVer=0
Platform=MacOSX
CSS=2
CssVersion=2
supportsCSS=true

[iCab/3.0* (Macintosh; ?; PPC*)]
Parent=iCab
Version=3.0
MajorVer=3
MinorVer=0
Platform=MacPPC
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/* (compatible; iCab 3.0*; Macintosh; *Mac OS X*)]
Parent=iCab
Version=3.0
MajorVer=3
MinorVer=0
Platform=MacOSX
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/* (compatible; iCab 3.0*; Macintosh; ?; PPC*)]
Parent=iCab
Version=3.0
MajorVer=3
MinorVer=0
Platform=MacPPC
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/4.5 (compatible; iCab 2.7*; Macintosh; ?; 68K*)]
Parent=iCab
Version=2.7
MajorVer=2
MinorVer=7
Platform=Mac68K

[Mozilla/4.5 (compatible; iCab 2.7*; Macintosh; ?; PPC*)]
Parent=iCab
Version=2.7
MajorVer=2
MinorVer=7
Platform=MacPPC

[Mozilla/4.5 (compatible; iCab 2.8*; Macintosh; ?; *Mac OS X*)]
Parent=iCab
Version=2.8
MajorVer=2
MinorVer=8
Platform=MacOSX

[Mozilla/4.5 (compatible; iCab 2.8*; Macintosh; ?; PPC*)]
Parent=iCab
Version=2.8
MajorVer=2
MinorVer=8
Platform=MacPPC

[Mozilla/4.5 (compatible; iCab 2.9*; Macintosh; *Mac OS X*)]
Parent=iCab
Version=2.9
MajorVer=2
MinorVer=9
Platform=MacOSX

[Mozilla/4.5 (compatible; iCab 2.9*; Macintosh; ?; PPC*)]
Parent=iCab
Version=2.9
MajorVer=2
MinorVer=9
Platform=MacPPC

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; iSiloX

[iSiloX]
Parent=DefaultProperties
Browser="iSiloX"
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaScript=true
Crawler=true
CSS=2
CssVersion=2
supportsCSS=true

[iSiloX/4.0* MacOS]
Parent=iSiloX
Version=4.0
MajorVer=4
MinorVer=0
Platform=MacPPC

[iSiloX/4.0* Windows/32]
Parent=iSiloX
Version=4.0
MajorVer=4
MinorVer=0
Platform=Win32
Win32=true

[iSiloX/4.1* MacOS]
Parent=iSiloX
Version=4.1
MajorVer=4
MinorVer=1
Platform=MacPPC

[iSiloX/4.1* Windows/32]
Parent=iSiloX
Version=4.1
MajorVer=4
MinorVer=1
Platform=Win32
Win32=true

[iSiloX/4.2* MacOS]
Parent=iSiloX
Version=4.2
MajorVer=4
MinorVer=2
Platform=MacPPC

[iSiloX/4.2* Windows/32]
Parent=iSiloX
Version=4.2
MajorVer=4
MinorVer=2
Platform=Win32
Win32=true

[iSiloX/4.3* MacOS]
Parent=iSiloX
Version=4.3
MajorVer=4
MinorVer=4
Platform=MacOSX

[iSiloX/4.3* Windows/32]
Parent=iSiloX
Version=4.3
MajorVer=4
MinorVer=3
Platform=Win32
Win32=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; K-Meleon

[K-Meleon]
Parent=DefaultProperties
Browser="K-Meleon"
Win32=true
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Windows; *; Win95; *; rv:1.*) Gecko/* K-Meleon/0.7*]
Parent=K-Meleon
Version=0.7
MajorVer=0
MinorVer=7
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; *; Win95; *; rv:1.*) Gecko/* K-Meleon/0.8*]
Parent=K-Meleon
Version=0.8
MajorVer=0
MinorVer=8
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; *; Win95; *; rv:1.*) Gecko/* K-Meleon/0.9*]
Parent=K-Meleon
Version=0.9
MajorVer=0
MinorVer=9
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; *; Win95; *; rv:1.*) Gecko/* K-Meleon/1.0*]
Parent=K-Meleon
Version=1.0
MajorVer=1
MinorVer=0
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.*) Gecko/* K-Meleon 0.7*]
Parent=K-Meleon
Version=0.7
MajorVer=0
MinorVer=7
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.*) Gecko/* K-Meleon/0.8*]
Parent=K-Meleon
Version=0.8
MajorVer=0
MinorVer=8
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.*) Gecko/* K-Meleon/0.9*]
Parent=K-Meleon
Version=0.9
MajorVer=0
MinorVer=9
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.*) Gecko/* K-Meleon/1.0*]
Parent=K-Meleon
Version=1.0
MajorVer=1
MinorVer=0
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0; *; rv:1.*) Gecko/* K-Meleon?0.7*]
Parent=K-Meleon
Version=0.7
MajorVer=0
MinorVer=7
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0; *; rv:1.*) Gecko/* K-Meleon?0.8*]
Parent=K-Meleon
Version=0.8
MajorVer=0
MinorVer=8
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0; *; rv:1.*) Gecko/* K-Meleon?0.9*]
Parent=K-Meleon
Version=0.9
MajorVer=0
MinorVer=9
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0; *; rv:1.*) Gecko/* K-Meleon?1.0*]
Parent=K-Meleon
Version=1.0
MajorVer=1
MinorVer=0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.*) Gecko/* K-Meleon/0.7*]
Parent=K-Meleon
Version=0.7
MajorVer=0
MinorVer=7
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.*) Gecko/* K-Meleon/0.8*]
Parent=K-Meleon
Version=0.8
MajorVer=0
MinorVer=8
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.*) Gecko/* K-Meleon/0.9*]
Parent=K-Meleon
Version=0.9
MajorVer=0
MinorVer=9
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.*) Gecko/* K-Meleon/1.0*]
Parent=K-Meleon
Version=1.0
MajorVer=1
MinorVer=0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2; *; rv:1.*) Gecko/* K-Meleon/0.7*]
Parent=K-Meleon
Version=0.7
MajorVer=0
MinorVer=7
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2; *; rv:1.*) Gecko/* K-Meleon/0.8*]
Parent=K-Meleon
Version=0.8
MajorVer=0
MinorVer=8
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2; *; rv:1.*) Gecko/* K-Meleon/0.9*]
Parent=K-Meleon
Version=0.9
MajorVer=0
MinorVer=9
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2; *; rv:1.*) Gecko/* K-Meleon/1.0*]
Parent=K-Meleon
Version=1.0
MajorVer=1
MinorVer=0
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; *; rv:1.*) Gecko/* K-Meleon/0.7*]
Parent=K-Meleon
Version=0.7
MajorVer=0
MinorVer=7
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; *; rv:1.*) Gecko/* K-Meleon/0.8*]
Parent=K-Meleon
Version=0.8
MajorVer=0
MinorVer=8
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; *; rv:1.*) Gecko/* K-Meleon/0.9*]
Parent=K-Meleon
Version=0.9
MajorVer=0
MinorVer=9
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; *; rv:1.*) Gecko/* K-Meleon/1.0*]
Parent=K-Meleon
Version=1.0
MajorVer=1
MinorVer=0
Platform=WinNT
Win32=true

[Mozilla/5.0 (X11; *; Linux*; *; rv:1.*) Gecko/* K-Meleon?0.7*]
Parent=K-Meleon
Version=0.7
MajorVer=0
MinorVer=7
Platform=Linux
Win32=false

[Mozilla/5.0 (X11; *; Linux*; *; rv:1.*) Gecko/* K-Meleon?0.8*]
Parent=K-Meleon
Version=0.8
MajorVer=0
MinorVer=8
Platform=Linux
Win32=false

[Mozilla/5.0 (X11; *; Linux*; *; rv:1.*) Gecko/* K-Meleon?0.9*]
Parent=K-Meleon
Version=0.9
MajorVer=0
MinorVer=9
Platform=Linux
Win32=false

[Mozilla/5.0 (X11; *; Linux*; *; rv:1.*) Gecko/* K-Meleon?1.0*]
Parent=K-Meleon
Version=1.0
MajorVer=1
MinorVer=0
Platform=Linux
Win32=false

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Konqueror

[Konqueror]
Parent=DefaultProperties
Browser="Konqueror"
Platform=Linux
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[*Konqueror/2.*]
Parent=Konqueror
IFrames=false

[*Konqueror/3.0*]
Parent=Konqueror
Version=3.0
MajorVer=3
MinorVer=0
IFrames=false

[*Konqueror/3.0*FreeBSD*]
Parent=Konqueror
Version=3.0
MajorVer=3
MinorVer=0
Platform=FreeBSD
IFrames=false

[*Konqueror/3.0*Linux*]
Parent=Konqueror
Version=3.0
MajorVer=3
MinorVer=0
Platform=Linux
IFrames=false

[*Konqueror/3.1*]
Parent=Konqueror
Version=3.1
MajorVer=3
MinorVer=1

[*Konqueror/3.1*FreeBSD*]
Parent=Konqueror
Version=3.1
MajorVer=3
MinorVer=1
Platform=FreeBSD

[*Konqueror/3.1*Linux*]
Parent=Konqueror
Version=3.1
MajorVer=3
MinorVer=1

[*Konqueror/3.2*]
Parent=Konqueror
Version=3.2
MajorVer=3
MinorVer=2

[*Konqueror/3.2*FreeBSD*]
Parent=Konqueror
Version=3.2
MajorVer=3
MinorVer=2
Platform=FreeBSD

[*Konqueror/3.2*Linux*]
Parent=Konqueror
Version=3.2
MajorVer=3
MinorVer=2
Platform=Linux

[*Konqueror/3.3*]
Parent=Konqueror
Version=3.3
MajorVer=3
MinorVer=3

[*Konqueror/3.3*FreeBSD*]
Parent=Konqueror
Version=3.3
MajorVer=3
MinorVer=3
Platform=FreeBSD

[*Konqueror/3.3*Linux*]
Parent=Konqueror
Version=3.3
MajorVer=3
MinorVer=3
Platform=Linux

[*Konqueror/3.3*OpenBSD*]
Parent=Konqueror
Version=3.3
MajorVer=3
MinorVer=3
Platform=OpenBSD

[*Konqueror/3.4*]
Parent=Konqueror
Version=3.4
MajorVer=3
MinorVer=4

[*Konqueror/3.4*FreeBSD*]
Parent=Konqueror
Version=3.4
MajorVer=3
MinorVer=4
Platform=FreeBSD

[*Konqueror/3.4*Linux*]
Parent=Konqueror
Version=3.4
MajorVer=3
MinorVer=4
Platform=Linux

[*Konqueror/3.4*OpenBSD*]
Parent=Konqueror
Version=3.4
MajorVer=3
MinorVer=4
Platform=OpenBSD

[*Konqueror/3.5*]
Parent=Konqueror
Version=3.5
MajorVer=3
MinorVer=5

[*Konqueror/3.5*FreeBSD*]
Parent=Konqueror
Version=3.5
MajorVer=3
MinorVer=5
Platform=FreeBSD

[*Konqueror/3.5*Linux*]
Parent=Konqueror
Version=3.5
MajorVer=3
MinorVer=5
Platform=Linux

[*Konqueror/3.5*OpenBSD*]
Parent=Konqueror
Version=3.5
MajorVer=3
MinorVer=5
Platform=OpenBSD

[Konqueror*]
Parent=Konqueror
IFrames=false

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Lycoris Desktop/LX

[Lycoris Desktop/LX]
Parent=DefaultProperties
Browser="Lycoris Desktop/LX"
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
Crawler=true

[Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.*: Desktop/LX Amethyst) Gecko/*]
Parent=Lycoris Desktop/LX
Version=1.1
MajorVer=1
MinorVer=1
Platform=Linux

[Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.*; Desktop/LX Amethyst) Gecko/*]
Parent=Lycoris Desktop/LX
Version=1.0
MajorVer=1
MinorVer=0
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Mosaic

[Mosaic]
Parent=DefaultProperties
Browser="Mosaic"
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true

[Mozilla/4.0 (VMS_Mosaic)]
Parent=Mosaic
Platform=OpenVMS

[VMS_Mosaic/3.7*]
Parent=Mosaic
Version=3.7
MajorVer=3
MinorVer=7
Platform=OpenVMS

[VMS_Mosaic/3.8*]
Parent=Mosaic
Version=3.8
MajorVer=3
MinorVer=8
Platform=OpenVMS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; NetPositive

[NetPositive]
Parent=DefaultProperties
Browser="NetPositive"
Platform=BeOS
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true

[*NetPositive/2.2*]
Parent=NetPositive
Version=2.2
MajorVer=2
MinorVer=2

[*NetPositive/2.2*BeOS*]
Parent=NetPositive
Version=2.2
MajorVer=2
MinorVer=2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; OmniWeb

[OmniWeb]
Parent=DefaultProperties
Browser="OmniWeb"
Frames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
WAP=true
isMobileDevice=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/* (compatible; MSIE *; Mac_PowerPC) OmniWeb/4.0*]
Parent=OmniWeb
Version=4.0
MajorVer=4
MinorVer=0
Platform=MacPPC

[Mozilla/* (compatible; MSIE *; Mac_PowerPC) OmniWeb/4.1*]
Parent=OmniWeb
Version=4.1
MajorVer=4
MinorVer=1
Platform=MacPPC

[Mozilla/* (compatible; MSIE *; Mac_PowerPC) OmniWeb/4.2*]
Parent=OmniWeb
Version=4.2
MajorVer=4
MinorVer=2
Platform=MacPPC

[Mozilla/* (compatible; MSIE *; Mac_PowerPC) OmniWeb/4.3*]
Parent=OmniWeb
Version=4.3
MajorVer=4
MinorVer=3
Platform=MacPPC

[Mozilla/* (compatible; MSIE *; Mac_PowerPC) OmniWeb/4.4*]
Parent=OmniWeb
Version=4.4
MajorVer=4
MinorVer=4
Platform=MacPPC

[Mozilla/* (compatible; MSIE *; Windows *) OmniWeb/4.0*]
Parent=OmniWeb
Version=4.0
MajorVer=4
MinorVer=0
Platform=Win32
Win32=true

[Mozilla/* (compatible; MSIE *; Windows *) OmniWeb/4.1*]
Parent=OmniWeb
Version=4.1
MajorVer=4
MinorVer=1
Platform=Win32
Win32=true

[Mozilla/* (compatible; MSIE *; Windows *) OmniWeb/4.2*]
Parent=OmniWeb
Version=4.2
MajorVer=4
MinorVer=2
Platform=Win32
Win32=true

[Mozilla/* (compatible; MSIE *; Windows *) OmniWeb/4.3*]
Parent=OmniWeb
Version=4.3
MajorVer=4
MinorVer=3
Platform=Win32
Win32=true

[Mozilla/* (compatible; MSIE *; Windows *) OmniWeb/4.4*]
Parent=OmniWeb
Version=4.4
MajorVer=4
MinorVer=4
Platform=Win32
Win32=true

[Mozilla/* (compatible; OmniWeb/4.0*; Mac_PowerPC)]
Parent=OmniWeb
Version=4.0
MajorVer=4
MinorVer=0
Platform=MacPPC

[Mozilla/* (compatible; OmniWeb/4.1*; Mac_PowerPC)]
Parent=OmniWeb
Version=4.1
MajorVer=4
MinorVer=1
Platform=MacPPC

[Mozilla/* (compatible; OmniWeb/4.2*; Mac_PowerPC)]
Parent=OmniWeb
Version=4.2
MajorVer=4
MinorVer=2
Platform=MacPPC

[Mozilla/* (compatible; OmniWeb/4.3*; Mac_PowerPC)]
Parent=OmniWeb
Version=4.3
MajorVer=4
MinorVer=3
Platform=MacPPC

[Mozilla/* (compatible; OmniWeb/4.4*; Mac_PowerPC)]
Parent=OmniWeb
Version=4.4
MajorVer=4
MinorVer=4
Platform=MacPPC

[Mozilla/* (Macintosh; I; PPC) OmniWeb/4.0*]
Parent=OmniWeb
Version=4.0
Platform=MacPPC

[Mozilla/* (Macintosh; I; PPC) OmniWeb/4.1*]
Parent=OmniWeb
Version=4.1
MajorVer=4
MinorVer=1
Platform=MacPPC

[Mozilla/* (Macintosh; I; PPC) OmniWeb/4.2*]
Parent=OmniWeb
Version=4.2
MajorVer=4
MinorVer=2
Platform=MacPPC

[Mozilla/* (Macintosh; I; PPC) OmniWeb/4.3*]
Parent=OmniWeb
Version=4.3
MajorVer=4
MinorVer=3
Platform=MacPPC

[Mozilla/* (Macintosh; I; PPC) OmniWeb/4.4*]
Parent=OmniWeb
Version=4.4
MajorVer=4
MinorVer=4
Platform=MacPPC

[Mozilla/5.0 (Macintosh; U; *Mac OS X; *) AppleWebKit/125.4 (KHTML, like Gecko, Safari) OmniWeb/v563.*]
Parent=OmniWeb
Version=5.1
MajorVer=5
MinorVer=1
Platform=MacOSX

[Mozilla/5.0 (Macintosh; U; *Mac OS X; *) AppleWebKit/420* (KHTML, like Gecko, Safari*) OmniWeb/v5*]
Parent=OmniWeb
Version=5.5
MajorVer=5
MinorVer=5
Platform=MacOSX

[Mozilla/5.0 (Macintosh; U; *Mac OS X; *) AppleWebKit/420* (KHTML, like Gecko, Safari/420) OmniWeb/v6*]
Parent=OmniWeb
Version=5.5
MajorVer=5
MinorVer=5
Platform=MacOSX

[Mozilla/5.0 (Macintosh; U; *Mac OS X; *) AppleWebKit/85 (KHTML, like Gecko) OmniWeb/v496*]
Parent=OmniWeb
Version=4.5
MajorVer=4
MinorVer=5
Platform=MacOSX

[Mozilla/5.0 (Macintosh; U; *Mac OS X; *) AppleWebKit/85 (KHTML, like Gecko) OmniWeb/v558.*]
Parent=OmniWeb
Version=5.0
MajorVer=5
MinorVer=0
Platform=MacOSX

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Safari

[Safari]
Parent=DefaultProperties
Browser="Safari"
Platform=MacOSX
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Safari/100*]
Parent=Safari
Version=1.1
MajorVer=1
MinorVer=1

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Safari/125*]
Parent=Safari
Version=1.2
MajorVer=1
MinorVer=2

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Safari/312*]
Parent=Safari
Version=1.3
MajorVer=1
MinorVer=3

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Safari/412*]
Parent=Safari
Version=2.0
MajorVer=2
MinorVer=0

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Safari/416*]
Parent=Safari
Version=2.0
MajorVer=2
MinorVer=0

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Safari/417*]
Parent=Safari
Version=2.0
MajorVer=2
MinorVer=0

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Safari/418*]
Parent=Safari
Version=2.0
MajorVer=2
MinorVer=0

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Safari/419*]
Parent=Safari
Version=2.0
MajorVer=2
MinorVer=0

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Safari/52*]
Parent=Safari
Beta=true

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Safari/85*]
Parent=Safari
Version=1.0
MajorVer=1
MinorVer=0

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; SeaMonkey

[SeaMonkey]
Parent=DefaultProperties
Browser="SeaMonkey"
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Windows; U; Win98; *) Gecko/* SeaMonkey/1.0*]
Parent=SeaMonkey
Version=1.0
MajorVer=1
MinorVer=0
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; U; Win98; *) Gecko/* SeaMonkey/1.1*]
Parent=SeaMonkey
Version=1.1
MajorVer=1
MinorVer=1
Platform=Win98

[Mozilla/5.0 (Windows; U; Windows NT 5.0; *) Gecko/* SeaMonkey/1.0*]
Parent=SeaMonkey
Version=1.0
MajorVer=1
MinorVer=0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; U; Windows NT 5.0; *) Gecko/* SeaMonkey/1.1*]
Parent=SeaMonkey
Version=1.1
MajorVer=1
MinorVer=1
Platform=Win2000

[Mozilla/5.0 (Windows; U; Windows NT 5.1; *) Gecko/* SeaMonkey/1.0*]
Parent=SeaMonkey
Version=1.0
MajorVer=1
MinorVer=0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; U; Windows NT 5.1; *) Gecko/* SeaMonkey/1.1*]
Parent=SeaMonkey
Version=1.1
MajorVer=1
MinorVer=1
Platform=WinXP

[Mozilla/5.0 (Windows; U; Windows NT 5.2; *) Gecko/* SeaMonkey/1.0*]
Parent=SeaMonkey
Version=1.0
MajorVer=1
MinorVer=0
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; U; Windows NT 5.2; *) Gecko/* SeaMonkey/1.1*]
Parent=SeaMonkey
Version=1.1
MajorVer=1
MinorVer=1
Platform=Win2003

[Mozilla/5.0 (X11; U; FreeBSD*) Gecko/* SeaMonkey/1.0*]
Parent=SeaMonkey
Version=1.0
MajorVer=1
MinorVer=0
Platform=FreeBSD

[Mozilla/5.0 (X11; U; FreeBSD*) Gecko/* SeaMonkey/1.1*]
Parent=SeaMonkey
Version=1.1
MajorVer=1
MinorVer=1
Platform=FreeBSD

[Mozilla/5.0 (X11; U; Linux*) Gecko/* SeaMonkey/1.0*]
Parent=SeaMonkey
Version=1.0
MajorVer=1
MinorVer=0
Platform=Linux

[Mozilla/5.0 (X11; U; Linux*) Gecko/* SeaMonkey/1.1*]
Parent=SeaMonkey
Version=1.1
MajorVer=1
MinorVer=1
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Shiira

[Shiira]
Parent=DefaultProperties
Browser="Shiira"
Platform=MacOSX
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Shiira/0.9*]
Parent=Shiira
Version=0.9
MajorVer=0
MinorVer=9

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Shiira/1.0*]
Parent=Shiira
Version=1.0
MajorVer=1
MinorVer=0

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Shiira/1.1*]
Parent=Shiira
Version=1.1
MajorVer=1
MinorVer=1

[Mozilla/5.0 (Macintosh; *Mac OS X*) AppleWebKit/* (*) Shiira/1.2*]
Parent=Shiira
Version=1.2
MajorVer=1
MinorVer=2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 4.0

[Opera 4.0]
Parent=DefaultProperties
Browser="Opera"
Version=4
MajorVer=4
Frames=true
Tables=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/3.0 (Linux*; U) Opera 4.*]
Parent=Opera 4.0
Platform=Linux

[Mozilla/3.0 (Mac_PowerPC; U) Opera 4.*]
Parent=Opera 4.0
Platform=MacPPC

[Mozilla/3.0 (Windows 2000; U) Opera 4.*]
Parent=Opera 4.0
Platform=Win2000
Win32=true

[Mozilla/3.0 (Windows 95; U) Opera 4.*]
Parent=Opera 4.0
Platform=Win95
Win32=true

[Mozilla/3.0 (Windows 98; U) Opera 4.*]
Parent=Opera 4.0
Platform=Win98
Win32=true

[Mozilla/3.0 (Windows ME; U) Opera 4.*]
Parent=Opera 4.0
Platform=WinME
Win32=true

[Mozilla/3.0 (Windows NT 4.0; U) Opera 4.*]
Parent=Opera 4.0
Platform=WinNT
Win32=true

[Mozilla/3.0 (Windows XP; U) Opera 4.*]
Parent=Opera 4.0
Platform=WinXP
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Linux*) Opera 4.*]
Parent=Opera 4.0
Platform=Linux

[Mozilla/4.0 (compatible; MSIE 5.0; Mac_PowerPC) Opera 4.*]
Parent=Opera 4.0
Platform=MacPPC

[Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 4.*]
Parent=Opera 4.0
Platform=Win2000
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows 95) Opera 4.*]
Parent=Opera 4.0
Platform=Win95
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 4.*]
Parent=Opera 4.0
Platform=Win98
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows ME) Opera 4.*]
Parent=Opera 4.0
Platform=WinME
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 4.*]
Parent=Opera 4.0
Platform=WinNT
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 4.*]
Parent=Opera 4.0
Platform=WinXP
Win32=true

[Mozilla/4.73 (Windows 98; U) Opera 4.*]
Parent=Opera 4.0
MinorVer=02
Win32=true

[Mozilla/4.76 (Macintosh;US;PPC) Opera 4.*]
Parent=Opera 4.0
Platform=MacPPC

[Mozilla/4.78 (Linux*; U) Opera 4.*]
Parent=Opera 4.0
Platform=Linux

[Mozilla/4.78 (Mac_PowerPC; U) Opera 4.*]
Parent=Opera 4.0
Platform=MacPPC

[Mozilla/4.78 (Windows 2000; U) Opera 4.*]
Parent=Opera 4.0
Platform=Win2000
Win32=true

[Mozilla/4.78 (Windows 95; U) Opera 4.*]
Parent=Opera 4.0
Platform=Win95
Win32=true

[Mozilla/4.78 (Windows 98; U) Opera 4.*]
Parent=Opera 4.0
Platform=Win98
Win32=true

[Mozilla/4.78 (Windows ME; U) Opera 4.*]
Parent=Opera 4.0
Platform=WinME
Win32=true

[Mozilla/4.78 (Windows NT 4.0; U) Opera 4.*]
Parent=Opera 4.0
Platform=WinNT
Win32=true

[Mozilla/4.78 (Windows XP; U) Opera 4.*]
Parent=Opera 4.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Linux*; U) Opera 4.*]
Parent=Opera 4.0
Platform=Linux

[Mozilla/5.0 (Mac_PowerPC; U) Opera 4.*]
Parent=Opera 4.0
Platform=MacPPC

[Mozilla/5.0 (Windows 2000; U) Opera 4.*]
Parent=Opera 4.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows 95; U) Opera 4.*]
Parent=Opera 4.0
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows 98; U) Opera 4.*]
Parent=Opera 4.0
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows ME; U) Opera 4.*]
Parent=Opera 4.0
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows NT 4.0; U) Opera 4.*]
Parent=Opera 4.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows XP; U) Opera 4.*]
Parent=Opera 4.0
Platform=WinXP
Win32=true

[Opera/4.* (Linux*; U)*]
Parent=Opera 4.0
Platform=Linux

[Opera/4.* (Mac_PowerPC; U)*]
Parent=Opera 4.0
Platform=MacPPC

[Opera/4.* (Windows 2000; U)*]
Parent=Opera 4.0
Platform=Win2000
Win32=true

[Opera/4.* (Windows 95; U)*]
Parent=Opera 4.0
Platform=Win95
Win32=true

[Opera/4.* (Windows 98; U)*]
Parent=Opera 4.0
Platform=Win98
Win32=true

[Opera/4.* (Windows ME; U)*]
Parent=Opera 4.0
Platform=WinME
Win32=true

[Opera/4.* (Windows NT 4.0; U)*]
Parent=Opera 4.0
Platform=WinNT
Win32=true

[Opera/4.* (Windows XP; U)*]
Parent=Opera 4.0
Platform=WinXP
Win32=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 5.0

[Opera 5.0]
Parent=DefaultProperties
Browser="Opera"
Version=5.0
MajorVer=5
Frames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/3.0 (Linux*; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=Linux

[Mozilla/3.0 (Mac_PowerPC; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=MacPPC

[Mozilla/3.0 (Windows 2000; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=Win2000
Win32=true

[Mozilla/3.0 (Windows 95; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=Win95
Win32=true

[Mozilla/3.0 (Windows 98; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=Win98
Win32=true

[Mozilla/3.0 (Windows ME; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=WinME
Win32=true

[Mozilla/3.0 (Windows NT 4.0; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=WinNT
Win32=true

[Mozilla/3.0 (Windows XP; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=WinXP
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Linux*) Opera 5.0*]
Parent=Opera 5.0
Platform=Linux

[Mozilla/4.0 (compatible; MSIE 5.0; Mac_PowerPC) Opera 5.0*]
Parent=Opera 5.0
Platform=MacPPC

[Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 5.0*]
Parent=Opera 5.0
Platform=Win2000
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows 95) Opera 5.0*]
Parent=Opera 5.0
Platform=Win95
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 5.0*]
Parent=Opera 5.0
Platform=Win98
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows ME) Opera 5.0*]
Parent=Opera 5.0
Platform=WinME
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 5.0*]
Parent=Opera 5.0
Platform=WinNT
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 5.0*]
Parent=Opera 5.0
Platform=WinXP
Win32=true

[Mozilla/4.76 (Macintosh;US;PPC) Opera 5.0*]
Parent=Opera 5.0
Platform=MacPPC

[Mozilla/4.78 (Linux*; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=Linux

[Mozilla/4.78 (Mac_PowerPC; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=MacPPC

[Mozilla/4.78 (Windows 2000; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=Win2000
Win32=true

[Mozilla/4.78 (Windows 95; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=Win95
Win32=true

[Mozilla/4.78 (Windows 98; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=Win98
Win32=true

[Mozilla/4.78 (Windows ME; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=WinME
Win32=true

[Mozilla/4.78 (Windows NT 4.0; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=WinNT
Win32=true

[Mozilla/4.78 (Windows XP; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Linux*; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=Linux

[Mozilla/5.0 (Mac_PowerPC; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=MacPPC

[Mozilla/5.0 (SunOS*; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=SunOS

[Mozilla/5.0 (Windows 2000; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows 95; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows 98; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows ME; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows NT 4.0; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows XP; ?) Opera 5.0*]
Parent=Opera 5.0
Platform=WinXP
Win32=true

[Opera/5.0*(Linux*; ?)*]
Parent=Opera 5.0
Platform=Linux

[Opera/5.0*(Mac_PowerPC; ?)*]
Parent=Opera 5.0
Platform=MacPPC

[Opera/5.0*(Windows 2000; ?)*]
Parent=Opera 5.0
Platform=Win2000
Win32=true

[Opera/5.0*(Windows 95; ?)*]
Parent=Opera 5.0
Platform=Win95
Win32=true

[Opera/5.0*(Windows 98; ?)*]
Parent=Opera 5.0
Platform=Win98
Win32=true

[Opera/5.0*(Windows ME; ?)*]
Parent=Opera 5.0
Platform=WinME
Win32=true

[Opera/5.0*(Windows NT 4.0; ?)*]
Parent=Opera 5.0
Platform=WinNT
Win32=true

[Opera/5.0*(Windows XP; ?)*]
Parent=Opera 5.0
Platform=WinXP
Win32=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 5.12

[Opera 5.12]
Parent=DefaultProperties
Browser="Opera"
Version=5.12
MajorVer=5
MinorVer=12
Frames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/3.0 (Linux*; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=Linux

[Mozilla/3.0 (OS/2*; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=OS/2

[Mozilla/3.0 (Windows 2000; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=Win2000
Win32=true

[Mozilla/3.0 (Windows 95; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=Win95
Win32=true

[Mozilla/3.0 (Windows 98; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=Win98
Win32=true

[Mozilla/3.0 (Windows ME; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=WinME
Win32=true

[Mozilla/3.0 (Windows NT 4.0; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=WinNT
Win32=true

[Mozilla/3.0 (Windows XP; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=WinXP
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Linux*) Opera 5.12*]
Parent=Opera 5.12
Platform=Linux

[Mozilla/4.0 (compatible; MSIE 5.0; OS/2*) Opera 5.12*]
Parent=Opera 5.12
Platform=OS/2

[Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 5.12*]
Parent=Opera 5.12
Platform=Win2000
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows 95) Opera 5.12*]
Parent=Opera 5.12
Platform=Win95
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 5.12*]
Parent=Opera 5.12
Platform=Win98
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows ME) Opera 5.12*]
Parent=Opera 5.12
Platform=WinME
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 5.12*]
Parent=Opera 5.12
Platform=WinNT
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 5.12*]
Parent=Opera 5.12
Platform=WinXP
Win32=true

[Mozilla/4.76 (Macintosh;US;PPC) Opera 5.12*]
Parent=Opera 5.12
Platform=MacPPC

[Mozilla/4.76 (Windows ME; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=WinME
Win32=true

[Mozilla/4.78 (Linux*; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=Linux

[Mozilla/4.78 (OS/2*; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=OS/2

[Mozilla/4.78 (Windows 2000; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=Win2000
Win32=true

[Mozilla/4.78 (Windows 95; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=Win95
Win32=true

[Mozilla/4.78 (Windows 98; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=Win98
Win32=true

[Mozilla/4.78 (Windows ME; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=WinME
Win32=true

[Mozilla/4.78 (Windows NT 4.0; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=WinNT
Win32=true

[Mozilla/4.78 (Windows XP; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=WinXP
Win32=true

[Mozilla/5.0 (Linux*; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=Linux

[Mozilla/5.0 (OS/2*; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=OS/2

[Mozilla/5.0 (Windows 2000; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows 95; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows 98; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows ME; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows NT 4.0; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows XP; ?) Opera 5.12*]
Parent=Opera 5.12
Platform=WinXP
Win32=true

[Opera/5.12 (Linux*; ?)*]
Parent=Opera 5.12
Platform=Linux

[Opera/5.12 (OS/2*; ?)*]
Parent=Opera 5.12
Platform=OS/2

[Opera/5.12 (Windows 2000; ?)*]
Parent=Opera 5.12
Platform=Win2000
Win32=true

[Opera/5.12 (Windows 95; ?)*]
Parent=Opera 5.12
Platform=Win95
Win32=true

[Opera/5.12 (Windows 98; ?)*]
Parent=Opera 5.12
Platform=Win98
Win32=true

[Opera/5.12 (Windows ME; ?)*]
Parent=Opera 5.12
Platform=WinME
Win32=true

[Opera/5.12 (Windows NT 4.0; ?)*]
Parent=Opera 5.12
Platform=WinNT
Win32=true

[Opera/5.12 (Windows XP; ?)*]
Parent=Opera 5.12
Platform=WinXP
Win32=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 6.0

[Opera 6.0]
Parent=DefaultProperties
Browser="Opera"
Version=6.0
MajorVer=6
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/3.0 (Linux*; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=Linux

[Mozilla/3.0 (Mac_PowerPC; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=MacPPC

[Mozilla/3.0 (Windows 2000; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=Win2000
Win32=true

[Mozilla/3.0 (Windows 95; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=Win95
Win32=true

[Mozilla/3.0 (Windows 98; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=Win98
Win32=true

[Mozilla/3.0 (Windows ME; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=WinME
Win32=true

[Mozilla/3.0 (Windows NT 4.0; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=WinNT
Win32=true

[Mozilla/3.0 (Windows XP; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=WinXP
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Linux*) Opera 6.0*]
Parent=Opera 6.0
Platform=Linux

[Mozilla/4.0 (compatible; MSIE 5.0; Mac_PowerPC) Opera 6.0*]
Parent=Opera 6.0
Platform=MacPPC

[Mozilla/4.0 (compatible; MSIE 5.0; Macintosh; PPC) Opera 6.0*]
Parent=Opera 6.0
Platform=MacPPC

[Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 6.0*]
Parent=Opera 6.0
Platform=Win2000
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows 95) Opera 6.0*]
Parent=Opera 6.0
Platform=Win95
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 6.0*]
Parent=Opera 6.0
Platform=Win98
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows ME) Opera 6.0*]
Parent=Opera 6.0
Platform=WinME
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 6.0*]
Parent=Opera 6.0
Platform=WinNT
Win32=true

[Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 6.0*]
Parent=Opera 6.0
Platform=WinXP
Win32=true

[Mozilla/4.76 (Macintosh;US;PPC) Opera 6.0*]
Parent=Opera 6.0
Platform=MacPPC

[Mozilla/4.78 (Linux*; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=Linux

[Mozilla/4.78 (Mac_PowerPC; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=MacPPC

[Mozilla/4.78 (Windows 2000; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=Win2000
Win32=true

[Mozilla/4.78 (Windows 95; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=Win95
Win32=true

[Mozilla/4.78 (Windows 98; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=Win98
Win32=true

[Mozilla/4.78 (Windows ME; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=WinME
Win32=true

[Mozilla/4.78 (Windows NT 4.0; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=WinNT
Win32=true

[Mozilla/4.78 (Windows XP; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Linux*; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=Linux

[Mozilla/5.0 (Mac_PowerPC; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=MacPPC

[Mozilla/5.0 (Windows 2000; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows 95; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows 98; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows ME; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows NT 4.0; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows XP; ?) Opera 6.0*]
Parent=Opera 6.0
Platform=WinXP
Win32=true

[Opera/6.0* (Linux*; ?)*]
Parent=Opera 6.0
Platform=Linux

[Opera/6.0* (Mac_PowerPC; ?)*]
Parent=Opera 6.0
Platform=MacPPC

[Opera/6.0* (Windows 2000; ?)*]
Parent=Opera 6.0
Platform=Win2000
Win32=true

[Opera/6.0* (Windows 95; ?)*]
Parent=Opera 6.0
Platform=Win95
Win32=true

[Opera/6.0* (Windows 98; ?)*]
Parent=Opera 6.0
Platform=Win98
Win32=true

[Opera/6.0* (Windows ME; ?)*]
Parent=Opera 6.0
Platform=WinME
Win32=true

[Opera/6.0* (Windows NT 4.0; ?)*]
Parent=Opera 6.0
Platform=WinNT
Win32=true

[Opera/6.0* (Windows NT 5.0; ?)*]
Parent=Opera 6.0
Platform=Win2000
Win32=true

[Opera/6.0* (Windows NT 5.1; ?)*]
Parent=Opera 6.0
Platform=WinXP
Win32=true

[Opera/6.0* (Windows NT 5.2; ?)*]
Parent=Opera 6.0
Platform=Win2003
Win32=true

[Opera/6.0* (Windows XP; ?)*]
Parent=Opera 6.0
Platform=WinXP
Win32=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 6.1

[Opera 6.1]
Parent=DefaultProperties
Browser="Opera"
Version=6.1
MajorVer=6
MinorVer=1
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/3.0 (FreeBSD*; ?) Opera 6.1  *]
Parent=Opera 6.1
Platform=FreeBSD

[Mozilla/3.0 (Linux*; ?) Opera 6.1  *]
Parent=Opera 6.1
Platform=Linux

[Mozilla/3.0 (Linux*; ?) Opera 6.11  *]
Parent=Opera 6.1
Version=6.11
MinorVer=11
Platform=Linux

[Mozilla/4.0 (compatible; MSIE 5.0; FreeBSD*) Opera 6.1  *]
Parent=Opera 6.1
Platform=FreeBSD

[Mozilla/4.0 (compatible; MSIE 5.0; Linux*) Opera 6.1  *]
Parent=Opera 6.1
Platform=Linux

[Mozilla/4.0 (compatible; MSIE 5.0; Linux*) Opera 6.11  *]
Parent=Opera 6.1
MinorVer=11
Platform=Linux
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/4.0 (compatible; MSIE 5.0; Linux*) Opera 6.12  *]
Parent=Opera 6.1
Version=6.12
MinorVer=12
Platform=Linux

[Mozilla/4.0 (compatible; MSIE 5.0; UNIX) Opera 6.1  *]
Parent=Opera 6.1
Platform=Unix

[Mozilla/4.0 (compatible; MSIE 5.0; UNIX) Opera 6.11  *]
Parent=Opera 6.1
MinorVer=11

[Mozilla/4.0 (compatible; MSIE 5.0; UNIX) Opera 6.12  *]
Parent=Opera 6.1
Version=6.12
MinorVer=12
Platform=Unix

[Mozilla/4.78 (FreeBSD*; ?) Opera 6.1  *]
Parent=Opera 6.1
Platform=FreeBSD

[Mozilla/4.78 (Linux*; ?) Opera 6.1  *]
Parent=Opera 6.1
Platform=Linux

[Mozilla/4.78 (Linux*; ?) Opera 6.11  *]
Parent=Opera 6.1
Version=6.11
MinorVer=11
Platform=Linux

[Mozilla/4.78 (Linux*; ?) Opera 6.12  *]
Parent=Opera 6.1
Version=6.12
MinorVer=12
Platform=Linux

[Mozilla/4.78 (UNIX; ?) Opera 6.1  *]
Parent=Opera 6.1
Platform=Unix

[Mozilla/5.0 (FreeBSD*; ?) Opera 6.1  *]
Parent=Opera 6.1
Platform=FreeBSD

[Mozilla/5.0 (Linux*; ?) Opera 6.1  *]
Parent=Opera 6.1
Platform=Linux

[Mozilla/5.0 (Linux*; ?) Opera 6.11  *]
Parent=Opera 6.1
MinorVer=11

[Mozilla/5.0 (UNIX; ?) Opera 6.11  *]
Parent=Opera 6.1
Version=6.11
MajorVer=6
MinorVer=11
Platform=Unix

[Opera/6.1 (FreeBSD*; ?)*]
Parent=Opera 6.1
Platform=FreeBSD

[Opera/6.1 (Linux*; ?)*]
Parent=Opera 6.1
Platform=Linux

[Opera/6.1 (UNIX*; ?)*]
Parent=Opera 6.1
Platform=Unix

[Opera/6.11 (FreeBSD*; ?)*]
Parent=Opera 6.1
Version=6.11
MinorVer=11
Platform=FreeBSD

[Opera/6.11 (Linux*; ?)*]
Parent=Opera 6.1
Version=6.11
MinorVer=11
Platform=Linux
CSS=1
CssVersion=1
supportsCSS=true

[Opera/6.11 (UNIX*; ?)*]
Parent=Opera 6.1
Platform=Unix

[Opera/6.12 (FreeBSD*; ?)*]
Parent=Opera 6.1
Version=6.12
MinorVer=12
Platform=FreeBSD

[Opera/6.12 (Linux*; ?)*]
Parent=Opera 6.1
Version=6.12
MinorVer=12
Platform=Linux

[Opera/6.12 (OpenBSD*; ?) *]
Parent=Opera 6.1
Version=6.12
MinorVer=12
Platform=OpenBSD

[Opera/6.12 (SunOS*; ?)*]
Parent=Opera 6.1
Version=6.12
MajorVer=6
MinorVer=12
Platform=SunOS
IFrames=false

[Opera/6.12 (UNIX*; ?)*]
Parent=Opera 6.1
Version=6.12
MinorVer=12
Platform=Unix

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 7.0

[Opera 7.0]
Parent=DefaultProperties
Browser="Opera"
Version=7.0
MajorVer=7
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/3.0 (Windows 2000; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=Win2000
Win32=true

[Mozilla/3.0 (Windows 95; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=Win95
Win32=true

[Mozilla/3.0 (Windows 98; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=Win98
Win32=true

[Mozilla/3.0 (Windows ME; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=WinME
Win32=true

[Mozilla/3.0 (Windows NT 4.0; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=WinNT
Win32=true

[Mozilla/3.0 (Windows XP; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=WinXP
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows 2000) Opera 7.0*]
Parent=Opera 7.0
Platform=Win2000
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows 95) Opera 7.0*]
Parent=Opera 7.0
Platform=Win95
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows 98) Opera 7.0*]
Parent=Opera 7.0
Platform=Win98
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows ME) Opera 7.0*]
Parent=Opera 7.0
Platform=WinME
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 4.0) Opera 7.0*]
Parent=Opera 7.0
Platform=WinNT
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.0) Opera 7.0*]
Parent=Opera 7.0
Platform=Win2000
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.0*]
Parent=Opera 7.0
Platform=WinXP
Win32=true

[Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows XP) Opera 7.0*]
Parent=Opera 7.0
Platform=WinXP
Win32=true

[Mozilla/4.78 (Windows 2000; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=Win2000
Win32=true

[Mozilla/4.78 (Windows 95; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=Win95
Win32=true

[Mozilla/4.78 (Windows 98; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=Win98
Win32=true

[Mozilla/4.78 (Windows ME; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=WinME
Win32=true

[Mozilla/4.78 (Windows NT 4.0; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=WinNT
Win32=true

[Mozilla/4.78 (Windows NT 5.1; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=WinXP
Win32=true

[Mozilla/4.78 (Windows Windows NT 5.0; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=Win2000
Win32=true

[Mozilla/4.78 (Windows XP; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows 2000; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows 95; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows 98; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows ME; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows NT 4.0; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows NT 5.1; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows XP; ?) Opera 7.0*]
Parent=Opera 7.0
Platform=WinXP
Win32=true

[Opera/7.0* (Windows 2000; ?)*]
Parent=Opera 7.0
Platform=Win2000
Win32=true

[Opera/7.0* (Windows 95; ?)*]
Parent=Opera 7.0
Platform=Win95
Win32=true

[Opera/7.0* (Windows 98; ?)*]
Parent=Opera 7.0
Platform=Win98
Win32=true

[Opera/7.0* (Windows ME; ?)*]
Parent=Opera 7.0
Platform=WinME
Win32=true

[Opera/7.0* (Windows NT 4.0; ?)*]
Parent=Opera 7.0
Platform=WinNT
Win32=true

[Opera/7.0* (Windows NT 5.0; ?)*]
Parent=Opera 7.0
Platform=Win2000
Win32=true

[Opera/7.0* (Windows NT 5.1; ?)*]
Parent=Opera 7.0
Platform=WinXP
Win32=true

[Opera/7.0* (Windows XP; ?)*]
Parent=Opera 7.0
Platform=WinXP
Win32=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 7.1

[Opera 7.1]
Parent=DefaultProperties
Browser="Opera"
Version=7.1
MajorVer=7
MinorVer=1
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 2000) Opera 7.1*]
Parent=Opera 7.1
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 95) Opera 7.1*]
Parent=Opera 7.1
Platform=Win95
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 98) Opera 7.1*]
Parent=Opera 7.1
Platform=Win98
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows ME) Opera 7.1*]
Parent=Opera 7.1
Platform=WinME
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 4.0) Opera 7.1*]
Parent=Opera 7.1
Platform=WinNT
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.0) Opera 7.1*]
Parent=Opera 7.1
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.1) Opera 7.1*]
Parent=Opera 7.1
Platform=WinXP
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows XP) Opera 7.1*]
Parent=Opera 7.1
Platform=WinXP
Win32=true

[Mozilla/?.* (Windows 2000; ?) Opera 7.1*]
Parent=Opera 7.1
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows 95; ?) Opera 7.1*]
Parent=Opera 7.1
Platform=Win95
Win32=true

[Mozilla/?.* (Windows 98; ?) Opera 7.1*]
Parent=Opera 7.1
Platform=Win98
Win32=true

[Mozilla/?.* (Windows ME; ?) Opera 7.1*]
Parent=Opera 7.1
Platform=WinME
Win32=true

[Mozilla/?.* (Windows NT 4.0; U) Opera 7.1*]
Parent=Opera 7.1
Platform=WinNT
Win32=true

[Mozilla/?.* (Windows NT 5.0; U) Opera 7.1*]
Parent=Opera 7.1
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows NT 5.1; ?) Opera 7.1*]
Parent=Opera 7.1
Platform=WinXP
Win32=true

[Opera/7.1* (Linux*; ?)*]
Parent=Opera 7.1
Platform=Linux

[Opera/7.1* (Windows 95; ?)*]
Parent=Opera 7.1
Platform=Win95
Win32=true

[Opera/7.1* (Windows 98; ?)*]
Parent=Opera 7.1
Platform=Win98
Win32=true

[Opera/7.1* (Windows ME; ?)*]
Parent=Opera 7.1
Platform=WinME
Win32=true

[Opera/7.1* (Windows NT 4.0; ?)*]
Parent=Opera 7.1
Platform=WinNT
Win32=true

[Opera/7.1* (Windows NT 5.0; ?)*]
Parent=Opera 7.1
Platform=Win2000
Win32=true

[Opera/7.1* (Windows NT 5.1; ?)*]
Parent=Opera 7.1
Platform=WinXP
Win32=true

[Opera/7.1* (Windows XP; ?)*]
Parent=Opera 7.1
Platform=WinXP
Win32=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 7.2

[Opera 7.2]
Parent=DefaultProperties
Browser="Opera"
Version=7.2
MajorVer=7
MinorVer=2
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (compatible; MSIE ?.*; Linux*) Opera 7.2*]
Parent=Opera 7.2
Platform=Linux

[Mozilla/?.* (compatible; MSIE ?.*; Windows 2000) Opera 7.2*]
Parent=Opera 7.2
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 95) Opera 7.2*]
Parent=Opera 7.2
Platform=Win95
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 98) Opera 7.2*]
Parent=Opera 7.2
Platform=Win98
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows ME) Opera 7.2*]
Parent=Opera 7.2
Platform=WinME
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 4.0) Opera 7.2*]
Parent=Opera 7.2
Platform=WinNT
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.0) Opera 7.2*]
Parent=Opera 7.2
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.1) Opera 7.2*]
Parent=Opera 7.2
Platform=WinXP
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.2) Opera 7.2*]
Parent=Opera 7.2
Platform=Win2003
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows XP) Opera 7.2*]
Parent=Opera 7.2
Platform=WinXP
Win32=true

[Mozilla/?.* (Windows 2000; ?) Opera 7.2*]
Parent=Opera 7.2
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows 95; ?) Opera 7.2*]
Parent=Opera 7.2
Platform=Win95
Win32=true

[Mozilla/?.* (Windows 98; ?) Opera 7.2*]
Parent=Opera 7.2
Platform=Win98
Win32=true

[Mozilla/?.* (Windows ME; ?) Opera 7.2*]
Parent=Opera 7.2
Platform=WinME
Win32=true

[Mozilla/?.* (Windows NT 4.0; U) Opera 7.2*]
Parent=Opera 7.2
Platform=WinNT
Win32=true

[Mozilla/?.* (Windows NT 5.0; U) Opera 7.2*]
Parent=Opera 7.2
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows NT 5.1; ?) Opera 7.2*]
Parent=Opera 7.2
Platform=WinXP
Win32=true

[Mozilla/?.* (Windows NT 5.2; ?) Opera 7.2*]
Parent=Opera 7.2
Platform=Win2003
Win32=true

[Opera/7.2* (Linux*; ?)*]
Parent=Opera 7.2
Platform=Linux

[Opera/7.2* (Windows 95; ?)*]
Parent=Opera 7.2
Platform=Win95
Win32=true

[Opera/7.2* (Windows 98; ?)*]
Parent=Opera 7.2
Platform=Win98
Win32=true

[Opera/7.2* (Windows ME; ?)*]
Parent=Opera 7.2
Platform=WinME
Win32=true

[Opera/7.2* (Windows NT 4.0; ?)*]
Parent=Opera 7.2
Platform=WinNT
Win32=true

[Opera/7.2* (Windows NT 5.0; ?)*]
Parent=Opera 7.2
Platform=Win2000
Win32=true

[Opera/7.2* (Windows NT 5.1; ?)*]
Parent=Opera 7.2
Platform=WinXP
Win32=true

[Opera/7.2* (Windows NT 5.2; ?)*]
Parent=Opera 7.2
Platform=Win2003
Win32=true

[Opera/7.2* (Windows XP; ?)*]
Parent=Opera 7.2
Platform=WinXP
Win32=true

[Opera/7.2* (X11; FreeBSD*; ?)*]
Parent=Opera 7.2
Platform=FreeBSD

[Opera/7.2* (X11; Linux*; ?)*]
Parent=Opera 7.2
Platform=Linux

[Opera/7.2* (X11; SunOS*)*]
Parent=Opera 7.2
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 7.5

[Opera 7.5]
Parent=DefaultProperties
Browser="Opera"
Version=7.5
MajorVer=7
MinorVer=5
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (compatible; MSIE ?.*; Linux*) Opera 7.5*]
Parent=Opera 7.5
Platform=Linux

[Mozilla/?.* (compatible; MSIE ?.*; Mac_PowerPC) Opera 7.5*]
Parent=Opera 7.5
Platform=MacPPC

[Mozilla/?.* (compatible; MSIE ?.*; Windows 2000) Opera 7.5*]
Parent=Opera 7.5
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 95) Opera 7.5*]
Parent=Opera 7.5
Platform=Win95
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 98) Opera 7.5*]
Parent=Opera 7.5
Platform=Win98
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows ME) Opera 7.5*]
Parent=Opera 7.5
Platform=WinME
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 4.0) Opera 7.5*]
Parent=Opera 7.5
Platform=WinNT
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.0) Opera 7.5*]
Parent=Opera 7.5
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.1) Opera 7.5*]
Parent=Opera 7.5
Platform=WinXP
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.2) Opera 7.5*]
Parent=Opera 7.5
Platform=Win2003
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows XP) Opera 7.5*]
Parent=Opera 7.5
Platform=WinXP
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; X11; Linux*) Opera 7.5*]
Parent=Opera 7.5
Platform=Linux

[Mozilla/?.* (Macintosh; *Mac OS X; ?) Opera 7.5*]
Parent=Opera 7.5
Platform=MacOSX

[Mozilla/?.* (Windows 2000; ?) Opera 7.5*]
Parent=Opera 7.5
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows 95; ?) Opera 7.5*]
Parent=Opera 7.5
Platform=Win95
Win32=true

[Mozilla/?.* (Windows 98; ?) Opera 7.5*]
Parent=Opera 7.5
Platform=Win98
Win32=true

[Mozilla/?.* (Windows ME; ?) Opera 7.5*]
Parent=Opera 7.5
Platform=WinME
Win32=true

[Mozilla/?.* (Windows NT 4.0; U) Opera 7.5*]
Parent=Opera 7.5
Platform=WinNT
Win32=true

[Mozilla/?.* (Windows NT 5.0; U) Opera 7.5*]
Parent=Opera 7.5
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows NT 5.1; ?) Opera 7.5*]
Parent=Opera 7.5
Platform=WinXP
Win32=true

[Mozilla/?.* (Windows NT 5.2; ?) Opera 7.5*]
Parent=Opera 7.5
Platform=Win2003
Win32=true

[Mozilla/?.* (X11; Linux*; ?) Opera 7.5*]
Parent=Opera 7.5
Platform=Linux

[Opera/7.5* (Linux*; ?)*]
Parent=Opera 7.5
Platform=Linux

[Opera/7.5* (Macintosh; *Mac OS X; ?)*]
Parent=Opera 7.5
Platform=MacOSX

[Opera/7.5* (Windows 95; ?)*]
Parent=Opera 7.5
Platform=Win95
Win32=true

[Opera/7.5* (Windows 98; ?)*]
Parent=Opera 7.5
Platform=Win98
Win32=true

[Opera/7.5* (Windows ME; ?)*]
Parent=Opera 7.5
Platform=WinME
Win32=true

[Opera/7.5* (Windows NT 4.0; ?)*]
Parent=Opera 7.5
Platform=WinNT
Win32=true

[Opera/7.5* (Windows NT 5.0; ?)*]
Parent=Opera 7.5
Platform=Win2000
Win32=true

[Opera/7.5* (Windows NT 5.1; ?)*]
Parent=Opera 7.5
Platform=WinXP
Win32=true

[Opera/7.5* (Windows NT 5.2; ?)*]
Parent=Opera 7.5
Platform=Win2003
Win32=true

[Opera/7.5* (Windows XP; ?)*]
Parent=Opera 7.5
Platform=WinXP
Win32=true

[Opera/7.5* (X11; FreeBSD*; ?)*]
Parent=Opera 7.5
Platform=FreeBSD

[Opera/7.5* (X11; Linux*; ?)*]
Parent=Opera 7.5
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 7.6

[Opera 7.6]
Parent=DefaultProperties
Browser="Opera"
Version=7.6
MajorVer=7
MinorVer=6
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (compatible; MSIE ?.*; Linux*) Opera 7.6*]
Parent=Opera 7.6
Platform=Linux

[Mozilla/?.* (compatible; MSIE ?.*; Mac_PowerPC) Opera 7.6*]
Parent=Opera 7.6
Platform=MacPPC

[Mozilla/?.* (compatible; MSIE ?.*; Windows 2000) Opera 7.6*]
Parent=Opera 7.6
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 95) Opera 7.6*]
Parent=Opera 7.6
Platform=Win95
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 98) Opera 7.6*]
Parent=Opera 7.6
Platform=Win98
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows ME) Opera 7.6*]
Parent=Opera 7.6
Platform=WinME
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 4.0) Opera 7.6*]
Parent=Opera 7.6
Platform=WinNT
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.0) Opera 7.6*]
Parent=Opera 7.6
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.1) Opera 7.6*]
Parent=Opera 7.6
Platform=WinXP
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.2) Opera 7.6*]
Parent=Opera 7.6
Platform=Win2003
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows XP) Opera 7.6*]
Parent=Opera 7.6
Platform=WinXP
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; X11; Linux*) Opera 7.6*]
Parent=Opera 7.6
Platform=Linux

[Mozilla/?.* (Macintosh; *Mac OS X; ?) Opera 7.6*]
Parent=Opera 7.6
Platform=MacOSX

[Mozilla/?.* (Windows 2000; ?) Opera 7.6*]
Parent=Opera 7.6
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows 95; ?) Opera 7.6*]
Parent=Opera 7.6
Platform=Win95
Win32=true

[Mozilla/?.* (Windows 98; ?) Opera 7.6*]
Parent=Opera 7.6
Platform=Win98
Win32=true

[Mozilla/?.* (Windows ME; ?) Opera 7.6*]
Parent=Opera 7.6
Platform=WinME
Win32=true

[Mozilla/?.* (Windows NT 4.0; U) Opera 7.6*]
Parent=Opera 7.6
Platform=WinNT
Win32=true

[Mozilla/?.* (Windows NT 5.0; U) Opera 7.6*]
Parent=Opera 7.6
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows NT 5.1; ?) Opera 7.6*]
Parent=Opera 7.6
Platform=WinXP
Win32=true

[Mozilla/?.* (Windows NT 5.2; ?) Opera 7.6*]
Parent=Opera 7.6
Platform=Win2003
Win32=true

[Mozilla/?.* (X11; Linux*; ?) Opera 7.6*]
Parent=Opera 7.6
Platform=Linux

[Opera/7.6* (Linux*)*]
Parent=Opera 7.6
Platform=Linux

[Opera/7.6* (Macintosh; *Mac OS X; ?)*]
Parent=Opera 7.6
Platform=MacOSX

[Opera/7.6* (Windows 95*)*]
Parent=Opera 7.6
Platform=Win95
Win32=true

[Opera/7.6* (Windows 98*)*]
Parent=Opera 7.6
Platform=Win98
Win32=true

[Opera/7.6* (Windows ME*)*]
Parent=Opera 7.6
Platform=WinME
Win32=true

[Opera/7.6* (Windows NT 4.0*)*]
Parent=Opera 7.6
Platform=WinNT
Win32=true

[Opera/7.6* (Windows NT 5.0*)*]
Parent=Opera 7.6
Platform=Win2000
Win32=true

[Opera/7.6* (Windows NT 5.1*)*]
Parent=Opera 7.6
Platform=WinXP
Win32=true

[Opera/7.6* (Windows NT 5.2*)*]
Parent=Opera 7.6
Platform=Win2003
Win32=true

[Opera/7.6* (Windows XP*)*]
Parent=Opera 7.6
Platform=WinXP
Win32=true

[Opera/7.6* (X11; FreeBSD*)*]
Parent=Opera 7.6
Platform=FreeBSD

[Opera/7.6* (X11; Linux*)*]
Parent=Opera 7.6
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 8.0

[Opera 8.0]
Parent=DefaultProperties
Browser="Opera"
Version=8.0
MajorVer=8
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (compatible; MSIE ?.*; Linux*) Opera 8.0*]
Parent=Opera 8.0
Platform=Linux

[Mozilla/?.* (compatible; MSIE ?.*; Mac_PowerPC Mac OS X; *) Opera 8.0*]
Parent=Opera 8.0
Platform=MacOSX

[Mozilla/?.* (compatible; MSIE ?.*; Mac_PowerPC) Opera 8.0*]
Parent=Opera 8.0
Platform=MacPPC

[Mozilla/?.* (compatible; MSIE ?.*; Windows 2000*) Opera 8.0*]
Parent=Opera 8.0
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 95*) Opera 8.0*]
Parent=Opera 8.0
Platform=Win95
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 98*) Opera 8.0*]
Parent=Opera 8.0
Platform=Win98
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows CE) Opera 8.0*]
Parent=Opera 8.0
Platform=WinCE
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows ME*) Opera 8.0*]
Parent=Opera 8.0
Platform=WinME
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 4.0*) Opera 8.0*]
Parent=Opera 8.0
Platform=WinNT
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.0*) Opera 8.0*]
Parent=Opera 8.0
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.1*) Opera 8.0*]
Parent=Opera 8.0
Platform=WinXP
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.2*) Opera 8.0*]
Parent=Opera 8.0
Platform=Win2003
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows XP*) Opera 8.0*]
Parent=Opera 8.0
Platform=WinXP
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; X11; FreeBSD*) Opera 8.0*]
Parent=Opera 8.0
Platform=FreeBSD

[Mozilla/?.* (compatible; MSIE ?.*; X11; Linux*) Opera 8.0*]
Parent=Opera 8.0
Platform=Linux

[Mozilla/?.* (Macintosh; *Mac OS X; ?) Opera 8.0*]
Parent=Opera 8.0
Platform=MacOSX

[Mozilla/?.* (Windows 2000; *) Opera 8.0*]
Parent=Opera 8.0
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows 95; *) Opera 8.0*]
Parent=Opera 8.0
Platform=Win95
Win32=true

[Mozilla/?.* (Windows 98; *) Opera 8.0*]
Parent=Opera 8.0
Platform=Win98
Win32=true

[Mozilla/?.* (Windows ME; *) Opera 8.0*]
Parent=Opera 8.0
Platform=WinME
Win32=true

[Mozilla/?.* (Windows NT 4.0; *) Opera 8.0*]
Parent=Opera 8.0
Platform=WinNT
Win32=true

[Mozilla/?.* (Windows NT 5.0; *) Opera 8.0*]
Parent=Opera 8.0
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows NT 5.1; *) Opera 8.0*]
Parent=Opera 8.0
Platform=WinXP
Win32=true

[Mozilla/?.* (Windows NT 5.2; *) Opera 8.0*]
Parent=Opera 8.0
Platform=Win2003
Win32=true

[Mozilla/?.* (X11; Linux*; *) Opera 8.0*]
Parent=Opera 8.0
Platform=Linux

[Opera/8.0* (Linux*)*]
Parent=Opera 8.0
Platform=Linux

[Opera/8.0* (Macintosh; *Mac OS X; *)*]
Parent=Opera 8.0
Platform=MacOSX

[Opera/8.0* (Windows 95*)*]
Parent=Opera 8.0
Platform=Win95
Win32=true

[Opera/8.0* (Windows 98*)*]
Parent=Opera 8.0
Platform=Win98
Win32=true

[Opera/8.0* (Windows CE*)*]
Parent=Opera 8.0
Platform=WinCE
Win32=true

[Opera/8.0* (Windows ME*)*]
Parent=Opera 8.0
Platform=WinME
Win32=true

[Opera/8.0* (Windows NT 4.0*)*]
Parent=Opera 8.0
Platform=WinNT
Win32=true

[Opera/8.0* (Windows NT 5.0*)*]
Parent=Opera 8.0
Platform=Win2000
Win32=true

[Opera/8.0* (Windows NT 5.1*)*]
Parent=Opera 8.0
Platform=WinXP
Win32=true

[Opera/8.0* (Windows NT 5.2*)*]
Parent=Opera 8.0
Platform=Win2003
Win32=true

[Opera/8.0* (Windows XP*)*]
Parent=Opera 8.0
Platform=WinXP
Win32=true

[Opera/8.0* (X11; FreeBSD*)*]
Parent=Opera 8.0
Platform=FreeBSD

[Opera/8.0* (X11; Linux*)*]
Parent=Opera 8.0
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 8.1

[Opera 8.1]
Parent=DefaultProperties
Browser="Opera"
Version=8.1
MajorVer=8
MinorVer=1
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (compatible; MSIE ?.*; Linux*) Opera 8.1*]
Parent=Opera 8.1
Platform=Linux

[Mozilla/?.* (compatible; MSIE ?.*; Mac_PowerPC) Opera 8.1*]
Parent=Opera 8.1
Platform=MacPPC

[Mozilla/?.* (compatible; MSIE ?.*; Windows 2000*) Opera 8.1*]
Parent=Opera 8.1
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 95*) Opera 8.1*]
Parent=Opera 8.1
Platform=Win95
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 98*) Opera 8.1*]
Parent=Opera 8.1
Platform=Win98
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows CE) Opera 8.1*]
Parent=Opera 8.1
Platform=WinCE
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows ME*) Opera 8.1*]
Parent=Opera 8.1
Platform=WinME
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 4.0*) Opera 8.1*]
Parent=Opera 8.1
Platform=WinNT
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.0*) Opera 8.1*]
Parent=Opera 8.1
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.1*) Opera 8.1*]
Parent=Opera 8.1
Platform=WinXP
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.2*) Opera 8.1*]
Parent=Opera 8.1
Platform=Win2003
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows XP*) Opera 8.1*]
Parent=Opera 8.1
Platform=WinXP
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; X11; FreeBSD*) Opera 8.1*]
Parent=Opera 8.1
Platform=FreeBSD

[Mozilla/?.* (compatible; MSIE ?.*; X11; Linux*) Opera 8.1*]
Parent=Opera 8.1
Platform=Linux

[Mozilla/?.* (Macintosh; *Mac OS X; ?) Opera 8.1*]
Parent=Opera 8.1
Platform=MacOSX

[Mozilla/?.* (Windows 2000; *) Opera 8.1*]
Parent=Opera 8.1
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows 95; *) Opera 8.1*]
Parent=Opera 8.1
Platform=Win95
Win32=true

[Mozilla/?.* (Windows 98; *) Opera 8.1*]
Parent=Opera 8.1
Platform=Win98
Win32=true

[Mozilla/?.* (Windows ME; *) Opera 8.1*]
Parent=Opera 8.1
Platform=WinME
Win32=true

[Mozilla/?.* (Windows NT 4.0; *) Opera 8.1*]
Parent=Opera 8.1
Platform=WinNT
Win32=true

[Mozilla/?.* (Windows NT 5.0; *) Opera 8.1*]
Parent=Opera 8.1
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows NT 5.1; *) Opera 8.1*]
Parent=Opera 8.1
Platform=WinXP
Win32=true

[Mozilla/?.* (Windows NT 5.2; *) Opera 8.1*]
Parent=Opera 8.1
Platform=Win2003
Win32=true

[Mozilla/?.* (X11; Linux*; *) Opera 8.1*]
Parent=Opera 8.1
Platform=Linux

[Opera/8.1* (Linux*)*]
Parent=Opera 8.1
Platform=Linux

[Opera/8.1* (Macintosh; *Mac OS X; *)*]
Parent=Opera 8.1
Platform=MacOSX

[Opera/8.1* (Windows 95*)*]
Parent=Opera 8.1
Platform=Win95
Win32=true

[Opera/8.1* (Windows 98*)*]
Parent=Opera 8.1
Platform=Win98
Win32=true

[Opera/8.1* (Windows CE*)*]
Parent=Opera 8.1
Platform=WinCE
Win32=true

[Opera/8.1* (Windows ME*)*]
Parent=Opera 8.1
Platform=WinME
Win32=true

[Opera/8.1* (Windows NT 4.0*)*]
Parent=Opera 8.1
Platform=WinNT
Win32=true

[Opera/8.1* (Windows NT 5.0*)*]
Parent=Opera 8.1
Platform=Win2000
Win32=true

[Opera/8.1* (Windows NT 5.1*)*]
Parent=Opera 8.1
Platform=WinXP
Win32=true

[Opera/8.1* (Windows NT 5.2*)*]
Parent=Opera 8.1
Platform=Win2003
Win32=true

[Opera/8.1* (Windows XP*)*]
Parent=Opera 8.1
Platform=WinXP
Win32=true

[Opera/8.1* (X11; FreeBSD*)*]
Parent=Opera 8.1
Platform=FreeBSD

[Opera/8.1* (X11; Linux*)*]
Parent=Opera 8.1
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 8.5

[Opera 8.5]
Parent=DefaultProperties
Browser="Opera"
Version=8.5
MajorVer=8
MinorVer=5
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (compatible; MSIE ?.*; Linux*) Opera 8.5*]
Parent=Opera 8.5
Platform=Linux

[Mozilla/?.* (compatible; MSIE ?.*; Mac_PowerPC Mac OS X;*) Opera 8.5*]
Parent=Opera 8.5
Platform=MacOSX

[Mozilla/?.* (compatible; MSIE ?.*; Mac_PowerPC) Opera 8.5*]
Parent=Opera 8.5
Platform=MacPPC

[Mozilla/?.* (compatible; MSIE ?.*; Windows 2000*) Opera 8.5*]
Parent=Opera 8.5
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 95*) Opera 8.5*]
Parent=Opera 8.5
Platform=Win95
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows 98*) Opera 8.5*]
Parent=Opera 8.5
Platform=Win98
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows CE) Opera 8.5*]
Parent=Opera 8.5
Platform=WinCE
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows ME*) Opera 8.5*]
Parent=Opera 8.5
Platform=WinME
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 4.0*) Opera 8.5*]
Parent=Opera 8.5
Platform=WinNT
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.0*) Opera 8.5*]
Parent=Opera 8.5
Platform=Win2000
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.1*) Opera 8.5*]
Parent=Opera 8.5
Platform=WinXP
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows NT 5.2*) Opera 8.5*]
Parent=Opera 8.5
Platform=Win2003
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; Windows XP*) Opera 8.5*]
Parent=Opera 8.5
Platform=WinXP
Win32=true

[Mozilla/?.* (compatible; MSIE ?.*; X11; FreeBSD*) Opera 8.5*]
Parent=Opera 8.5
Platform=FreeBSD

[Mozilla/?.* (compatible; MSIE ?.*; X11; Linux*) Opera 8.5*]
Parent=Opera 8.5
Platform=Linux

[Mozilla/?.* (Macintosh; *Mac OS X; ?) Opera 8.5*]
Parent=Opera 8.5
Platform=MacOSX

[Mozilla/?.* (Macintosh; PPC Mac OS X;*) Opera 8.5*]
Parent=Opera 8.5
Platform=MacOSX

[Mozilla/?.* (Windows 2000; *) Opera 8.5*]
Parent=Opera 8.5
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows 95; *) Opera 8.5*]
Parent=Opera 8.5
Platform=Win95
Win32=true

[Mozilla/?.* (Windows 98; *) Opera 8.5*]
Parent=Opera 8.5
Platform=Win98
Win32=true

[Mozilla/?.* (Windows ME; *) Opera 8.5*]
Parent=Opera 8.5
Platform=WinME
Win32=true

[Mozilla/?.* (Windows NT 4.0; *) Opera 8.5*]
Parent=Opera 8.5
Platform=WinNT
Win32=true

[Mozilla/?.* (Windows NT 5.0; *) Opera 8.5*]
Parent=Opera 8.5
Platform=Win2000
Win32=true

[Mozilla/?.* (Windows NT 5.1; *) Opera 8.5*]
Parent=Opera 8.5
Platform=WinXP
Win32=true

[Mozilla/?.* (Windows NT 5.2; *) Opera 8.5*]
Parent=Opera 8.5
Platform=Win2003
Win32=true

[Mozilla/?.* (X11; Linux*; *) Opera 8.5*]
Parent=Opera 8.5
Platform=Linux

[Opera/8.5* (Linux*)*]
Parent=Opera 8.5
Platform=Linux

[Opera/8.5* (Macintosh; *Mac OS X; *)*]
Parent=Opera 8.5
Platform=MacOSX

[Opera/8.5* (Windows 95*)*]
Parent=Opera 8.5
Platform=Win95
Win32=true

[Opera/8.5* (Windows 98*)*]
Parent=Opera 8.5
Platform=Win98
Win32=true

[Opera/8.5* (Windows CE*)*]
Parent=Opera 8.5
Platform=WinCE
Win32=true

[Opera/8.5* (Windows ME*)*]
Parent=Opera 8.5
Platform=WinME
Win32=true

[Opera/8.5* (Windows NT 4.0*)*]
Parent=Opera 8.5
Platform=WinNT
Win32=true

[Opera/8.5* (Windows NT 5.0*)*]
Parent=Opera 8.5
Platform=Win2000
Win32=true

[Opera/8.5* (Windows NT 5.1*)*]
Parent=Opera 8.5
Platform=WinXP
Win32=true

[Opera/8.5* (Windows NT 5.2*)*]
Parent=Opera 8.5
Platform=Win2003
Win32=true

[Opera/8.5* (Windows XP*)*]
Parent=Opera 8.5
Platform=WinXP
Win32=true

[Opera/8.5* (X11; FreeBSD*)*]
Parent=Opera 8.5
Platform=FreeBSD

[Opera/8.5* (X11; Linux*)*]
Parent=Opera 8.5
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 9.0

[Opera 9.0]
Parent=DefaultProperties
Browser="Opera"
Version=9.0
MajorVer=9
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/* (compatible; MSIE*; Linux*) Opera 9.0*]
Parent=Opera 9.0
Platform=Linux

[Mozilla/* (compatible; MSIE*; Mac_PowerPC Mac OS X;*) Opera 9.0*]
Parent=Opera 9.0
Platform=MacOSX

[Mozilla/* (compatible; MSIE*; Mac_PowerPC) Opera 9.0*]
Parent=Opera 9.0
Platform=MacPPC

[Mozilla/* (compatible; MSIE*; Windows 2000*) Opera 9.0*]
Parent=Opera 9.0
Platform=Win2000
Win32=true

[Mozilla/* (compatible; MSIE*; Windows 95*) Opera 9.0*]
Parent=Opera 9.0
Platform=Win95
Win32=true

[Mozilla/* (compatible; MSIE*; Windows 98*) Opera 9.0*]
Parent=Opera 9.0
Platform=Win98
Win32=true

[Mozilla/* (compatible; MSIE*; Windows CE*) Opera 9.0*]
Parent=Opera 9.0
Platform=WinCE
Win32=true

[Mozilla/* (compatible; MSIE*; Windows ME*) Opera 9.0*]
Parent=Opera 9.0
Platform=WinME
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 4.0*) Opera 9.0*]
Parent=Opera 9.0
Platform=WinNT
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 5.0*) Opera 9.0*]
Parent=Opera 9.0
Platform=Win2000
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 5.1*) Opera 9.0*]
Parent=Opera 9.0
Platform=WinXP
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 5.2*) Opera 9.0*]
Parent=Opera 9.0
Platform=Win2003
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 6.0*) Opera 9.0*]
Parent=Opera 9.0
Platform=WinVista
Win32=true

[Mozilla/* (compatible; MSIE*; Windows XP*) Opera 9.0*]
Parent=Opera 9.0
Platform=WinXP
Win32=true

[Mozilla/* (compatible; MSIE*; X11; FreeBSD*) Opera 9.0*]
Parent=Opera 9.0
Platform=FreeBSD

[Mozilla/* (compatible; MSIE*; X11; Linux*) Opera 9.0*]
Parent=Opera 9.0
Platform=Linux

[Mozilla/* (compatible; MSIE*; X11; SunOS*) Opera 9.0*]
Parent=Opera 9.0
Platform=SunOS

[Mozilla/* (Macintosh; *Mac OS X; ?) Opera 9.0*]
Parent=Opera 9.0
Platform=MacOSX

[Mozilla/* (Windows 2000;*) Opera 9.0*]
Parent=Opera 9.0
Platform=Win2000
Win32=true

[Mozilla/* (Windows 95;*) Opera 9.0*]
Parent=Opera 9.0
Platform=Win95
Win32=true

[Mozilla/* (Windows 98;*) Opera 9.0*]
Parent=Opera 9.0
Platform=Win98
Win32=true

[Mozilla/* (Windows ME;*) Opera 9.0*]
Parent=Opera 9.0
Platform=WinME
Win32=true

[Mozilla/* (Windows NT 4.0;*) Opera 9.0*]
Parent=Opera 9.0
Platform=WinNT
Win32=true

[Mozilla/* (Windows NT 5.0;*) Opera 9.0*]
Parent=Opera 9.0
Platform=Win2000
Win32=true

[Mozilla/* (Windows NT 5.1;*) Opera 9.0*]
Parent=Opera 9.0
Platform=WinXP
Win32=true

[Mozilla/* (Windows NT 5.2;*) Opera 9.0*]
Parent=Opera 9.0
Platform=Win2003
Win32=true

[Mozilla/* (X11; Linux*) Opera 9.0*]
Parent=Opera 9.0
Platform=Linux

[Opera/9.0* (Linux*)*]
Parent=Opera 9.0
Platform=Linux

[Opera/9.0* (Macintosh; *Mac OS X;*)*]
Parent=Opera 9.0
Platform=MacOSX

[Opera/9.0* (Windows 95*)*]
Parent=Opera 9.0
Platform=Win95
Win32=true

[Opera/9.0* (Windows 98*)*]
Parent=Opera 9.0
Platform=Win98
Win32=true

[Opera/9.0* (Windows CE*)*]
Parent=Opera 9.0
Platform=WinCE
Win32=true

[Opera/9.0* (Windows ME*)*]
Parent=Opera 9.0
Platform=WinME
Win32=true

[Opera/9.0* (Windows NT 4.0*)*]
Parent=Opera 9.0
Platform=WinNT
Win32=true

[Opera/9.0* (Windows NT 5.0*)*]
Parent=Opera 9.0
Platform=Win2000
Win32=true

[Opera/9.0* (Windows NT 5.1*)*]
Parent=Opera 9.0
Platform=WinXP
Win32=true

[Opera/9.0* (Windows NT 5.2*)*]
Parent=Opera 9.0
Platform=Win2003
Win32=true

[Opera/9.0* (Windows NT 6.0*)*]
Parent=Opera 9.0
Platform=WinVista
Win32=true

[Opera/9.0* (Windows XP*)*]
Parent=Opera 9.0
Platform=WinXP
Win32=true

[Opera/9.0* (X11; FreeBSD*)*]
Parent=Opera 9.0
Platform=FreeBSD

[Opera/9.0* (X11; Linux*)*]
Parent=Opera 9.0
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 9.1

[Opera 9.1]
Parent=DefaultProperties
Browser="Opera"
Version=9.1
MajorVer=9
MinorVer=1
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/* (compatible; MSIE*; Linux*) Opera 9.1*]
Parent=Opera 9.1
Platform=Linux

[Mozilla/* (compatible; MSIE*; Mac_PowerPC Mac OS X;*) Opera 9.1*]
Parent=Opera 9.1
Platform=MacOSX

[Mozilla/* (compatible; MSIE*; Mac_PowerPC;*) Opera 9.1*]
Parent=Opera 9.1
Platform=MacPPC

[Mozilla/* (compatible; MSIE*; Windows 2000*) Opera 9.1*]
Parent=Opera 9.1
Platform=Win2000
Win32=true

[Mozilla/* (compatible; MSIE*; Windows 95*) Opera 9.1*]
Parent=Opera 9.1
Platform=Win95
Win32=true

[Mozilla/* (compatible; MSIE*; Windows 98*) Opera 9.1*]
Parent=Opera 9.1
Platform=Win98
Win32=true

[Mozilla/* (compatible; MSIE*; Windows CE*) Opera 9.1*]
Parent=Opera 9.1
Platform=WinCE
Win32=true

[Mozilla/* (compatible; MSIE*; Windows ME*) Opera 9.1*]
Parent=Opera 9.1
Platform=WinME
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 4.0*) Opera 9.1*]
Parent=Opera 9.1
Platform=WinNT
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 5.0*) Opera 9.1*]
Parent=Opera 9.1
Platform=Win2000
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 5.1*) Opera 9.1*]
Parent=Opera 9.1
Platform=WinXP
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 5.2*) Opera 9.1*]
Parent=Opera 9.1
Platform=Win2003
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 6.0*) Opera 9.1*]
Parent=Opera 9.1
Platform=WinVista
Win32=true

[Mozilla/* (compatible; MSIE*; Windows XP*) Opera 9.1*]
Parent=Opera 9.1
Platform=WinXP
Win32=true

[Mozilla/* (compatible; MSIE*; X11; FreeBSD*) Opera 9.1*]
Parent=Opera 9.1
Platform=FreeBSD

[Mozilla/* (compatible; MSIE*; X11; Linux*) Opera 9.1*]
Parent=Opera 9.1
Platform=Linux

[Mozilla/* (compatible; MSIE*; X11; SunOS*) Opera 9.1*]
Parent=Opera 9.1
Platform=SunOS

[Mozilla/* (Macintosh; *Mac OS X; ?) Opera 9.1*]
Parent=Opera 9.1
Platform=MacOSX

[Mozilla/* (Windows 2000;*) Opera 9.1*]
Parent=Opera 9.1
Platform=Win2000
Win32=true

[Mozilla/* (Windows 95;*) Opera 9.1*]
Parent=Opera 9.1
Platform=Win95
Win32=true

[Mozilla/* (Windows 98;*) Opera 9.1*]
Parent=Opera 9.1
Platform=Win98
Win32=true

[Mozilla/* (Windows ME;*) Opera 9.1*]
Parent=Opera 9.1
Platform=WinME
Win32=true

[Mozilla/* (Windows NT 4.0;*) Opera 9.1*]
Parent=Opera 9.1
Platform=WinNT
Win32=true

[Mozilla/* (Windows NT 5.0;*) Opera 9.1*]
Parent=Opera 9.1
Platform=Win2000
Win32=true

[Mozilla/* (Windows NT 5.1;*) Opera 9.1*]
Parent=Opera 9.1
Platform=WinXP
Win32=true

[Mozilla/* (Windows NT 5.2;*) Opera 9.1*]
Parent=Opera 9.1
Platform=Win2003
Win32=true

[Mozilla/* (X11; Linux*) Opera 9.1*]
Parent=Opera 9.1
Platform=Linux

[Opera/9.1* (Linux*)*]
Parent=Opera 9.1
Platform=Linux

[Opera/9.1* (Macintosh; *Mac OS X;*)*]
Parent=Opera 9.1
Platform=MacOSX

[Opera/9.1* (Windows 95*)*]
Parent=Opera 9.1
Platform=Win95
Win32=true

[Opera/9.1* (Windows 98*)*]
Parent=Opera 9.1
Platform=Win98
Win32=true

[Opera/9.1* (Windows CE*)*]
Parent=Opera 9.1
Platform=WinCE
Win32=true

[Opera/9.1* (Windows ME*)*]
Parent=Opera 9.1
Platform=WinME
Win32=true

[Opera/9.1* (Windows NT 4.0*)*]
Parent=Opera 9.1
Platform=WinNT
Win32=true

[Opera/9.1* (Windows NT 5.0*)*]
Parent=Opera 9.1
Platform=Win2000
Win32=true

[Opera/9.1* (Windows NT 5.1*)*]
Parent=Opera 9.1
Platform=WinXP
Win32=true

[Opera/9.1* (Windows NT 5.2*)*]
Parent=Opera 9.1
Platform=Win2003
Win32=true

[Opera/9.1* (Windows NT 6.0*)*]
Parent=Opera 9.1
Platform=WinVista
Win32=true

[Opera/9.1* (Windows XP*)*]
Parent=Opera 9.1
Platform=WinXP
Win32=true

[Opera/9.1* (X11; FreeBSD*)*]
Parent=Opera 9.1
Platform=FreeBSD

[Opera/9.1* (X11; Linux*)*]
Parent=Opera 9.1
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 9.2

[Opera 9.2]
Parent=DefaultProperties
Browser="Opera"
Version=9.2
MajorVer=9
MinorVer=2
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/* (compatible; MSIE*; Linux*) Opera 9.2*]
Parent=Opera 9.2
Platform=Linux

[Mozilla/* (compatible; MSIE*; Mac_PowerPC Mac OS X;*) Opera 9.2*]
Parent=Opera 9.2
Platform=MacOSX

[Mozilla/* (compatible; MSIE*; Mac_PowerPC) Opera 9.2*]
Parent=Opera 9.2
Platform=MacPPC

[Mozilla/* (compatible; MSIE*; Windows 2000*) Opera 9.2*]
Parent=Opera 9.2
Platform=Win2000
Win32=true

[Mozilla/* (compatible; MSIE*; Windows 95*) Opera 9.2*]
Parent=Opera 9.2
Platform=Win95
Win32=true

[Mozilla/* (compatible; MSIE*; Windows 98*) Opera 9.2*]
Parent=Opera 9.2
Platform=Win98
Win32=true

[Mozilla/* (compatible; MSIE*; Windows CE*) Opera 9.2*]
Parent=Opera 9.2
Platform=WinCE
Win32=true

[Mozilla/* (compatible; MSIE*; Windows ME*) Opera 9.2*]
Parent=Opera 9.2
Platform=WinME
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 4.0*) Opera 9.2*]
Parent=Opera 9.2
Platform=WinNT
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 5.0*) Opera 9.2*]
Parent=Opera 9.2
Platform=Win2000
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 5.1*) Opera 9.2*]
Parent=Opera 9.2
Platform=WinXP
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 5.2*) Opera 9.2*]
Parent=Opera 9.2
Platform=Win2003
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 6.0*) Opera 9.2*]
Parent=Opera 9.2
Platform=WinVista
Win32=true

[Mozilla/* (compatible; MSIE*; Windows XP*) Opera 9.2*]
Parent=Opera 9.2
Platform=WinXP
Win32=true

[Mozilla/* (compatible; MSIE*; X11; FreeBSD*) Opera 9.2*]
Parent=Opera 9.2
Platform=FreeBSD

[Mozilla/* (compatible; MSIE*; X11; Linux*) Opera 9.2*]
Parent=Opera 9.2
Platform=Linux

[Mozilla/* (compatible; MSIE*; X11; SunOS*) Opera 9.2*]
Parent=Opera 9.2
Platform=SunOS

[Mozilla/* (Macintosh; *Mac OS X; ?) Opera 9.2*]
Parent=Opera 9.2
Platform=MacOSX

[Mozilla/* (Windows 2000;*) Opera 9.2*]
Parent=Opera 9.2
Platform=Win2000
Win32=true

[Mozilla/* (Windows 95;*) Opera 9.2*]
Parent=Opera 9.2
Platform=Win95
Win32=true

[Mozilla/* (Windows 98;*) Opera 9.2*]
Parent=Opera 9.2
Platform=Win98
Win32=true

[Mozilla/* (Windows ME;*) Opera 9.2*]
Parent=Opera 9.2
Platform=WinME
Win32=true

[Mozilla/* (Windows NT 4.0;*) Opera 9.2*]
Parent=Opera 9.2
Platform=WinNT
Win32=true

[Mozilla/* (Windows NT 5.0;*) Opera 9.2*]
Parent=Opera 9.2
Platform=Win2000
Win32=true

[Mozilla/* (Windows NT 5.1;*) Opera 9.2*]
Parent=Opera 9.2
Platform=WinXP
Win32=true

[Mozilla/* (Windows NT 5.2;*) Opera 9.2*]
Parent=Opera 9.2
Platform=Win2003
Win32=true

[Mozilla/* (X11; Linux*) Opera 9.2*]
Parent=Opera 9.2
Platform=Linux

[Opera/9.2* (Linux*)*]
Parent=Opera 9.2
Platform=Linux

[Opera/9.2* (Macintosh; *Mac OS X;*)*]
Parent=Opera 9.2
Platform=MacOSX

[Opera/9.2* (Windows 95*)*]
Parent=Opera 9.2
Platform=Win95
Win32=true

[Opera/9.2* (Windows 98*)*]
Parent=Opera 9.2
Platform=Win98
Win32=true

[Opera/9.2* (Windows CE*)*]
Parent=Opera 9.2
Platform=WinCE
Win32=true

[Opera/9.2* (Windows ME*)*]
Parent=Opera 9.2
Platform=WinME
Win32=true

[Opera/9.2* (Windows NT 4.0*)*]
Parent=Opera 9.2
Platform=WinNT
Win32=true

[Opera/9.2* (Windows NT 5.0*)*]
Parent=Opera 9.2
Platform=Win2000
Win32=true

[Opera/9.2* (Windows NT 5.1*)*]
Parent=Opera 9.2
Platform=WinXP
Win32=true

[Opera/9.2* (Windows NT 5.2*)*]
Parent=Opera 9.2
Platform=Win2003
Win32=true

[Opera/9.2* (Windows NT 6.0*)*]
Parent=Opera 9.2
Platform=WinVista
Win32=true

[Opera/9.2* (Windows XP*)*]
Parent=Opera 9.2
Platform=WinXP
Win32=true

[Opera/9.2* (X11; FreeBSD*)*]
Parent=Opera 9.2
Platform=FreeBSD

[Opera/9.2* (X11; Linux*)*]
Parent=Opera 9.2
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Opera 9.3

[Opera 9.3]
Parent=DefaultProperties
Browser="Opera"
Version=9.3
MajorVer=9
MinorVer=3
Alpha=true
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/* (compatible; MSIE*; Linux*) Opera 9.3*]
Parent=Opera 9.3
Platform=Linux

[Mozilla/* (compatible; MSIE*; Mac_PowerPC Mac OS X;*) Opera 9.3*]
Parent=Opera 9.3
Platform=MacOSX

[Mozilla/* (compatible; MSIE*; Mac_PowerPC) Opera 9.3*]
Parent=Opera 9.3
Platform=MacPPC

[Mozilla/* (compatible; MSIE*; Windows 2000*) Opera 9.3*]
Parent=Opera 9.3
Platform=Win2000
Win32=true

[Mozilla/* (compatible; MSIE*; Windows 95*) Opera 9.3*]
Parent=Opera 9.3
Platform=Win95
Win32=true

[Mozilla/* (compatible; MSIE*; Windows 98*) Opera 9.3*]
Parent=Opera 9.3
Platform=Win98
Win32=true

[Mozilla/* (compatible; MSIE*; Windows CE*) Opera 9.3*]
Parent=Opera 9.3
Platform=WinCE
Win32=true

[Mozilla/* (compatible; MSIE*; Windows ME*) Opera 9.3*]
Parent=Opera 9.3
Platform=WinME
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 4.0*) Opera 9.3*]
Parent=Opera 9.3
Platform=WinNT
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 5.0*) Opera 9.3*]
Parent=Opera 9.3
Platform=Win2000
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 5.1*) Opera 9.3*]
Parent=Opera 9.3
Platform=WinXP
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 5.2*) Opera 9.3*]
Parent=Opera 9.3
Platform=Win2003
Win32=true

[Mozilla/* (compatible; MSIE*; Windows NT 6.0*) Opera 9.3*]
Parent=Opera 9.3
Platform=WinVista
Win32=true

[Mozilla/* (compatible; MSIE*; Windows XP*) Opera 9.3*]
Parent=Opera 9.3
Platform=WinXP
Win32=true

[Mozilla/* (compatible; MSIE*; X11; FreeBSD*) Opera 9.3*]
Parent=Opera 9.3
Platform=FreeBSD

[Mozilla/* (compatible; MSIE*; X11; Linux*) Opera 9.3*]
Parent=Opera 9.3
Platform=Linux

[Mozilla/* (compatible; MSIE*; X11; SunOS*) Opera 9.3*]
Parent=Opera 9.3
Platform=SunOS

[Mozilla/* (Macintosh; *Mac OS X; ?) Opera 9.3*]
Parent=Opera 9.3
Platform=MacOSX

[Mozilla/* (Windows 2000;*) Opera 9.3*]
Parent=Opera 9.3
Platform=Win2000
Win32=true

[Mozilla/* (Windows 95;*) Opera 9.3*]
Parent=Opera 9.3
Platform=Win95
Win32=true

[Mozilla/* (Windows 98;*) Opera 9.3*]
Parent=Opera 9.3
Platform=Win98
Win32=true

[Mozilla/* (Windows ME;*) Opera 9.3*]
Parent=Opera 9.3
Platform=WinME
Win32=true

[Mozilla/* (Windows NT 4.0;*) Opera 9.3*]
Parent=Opera 9.3
Platform=WinNT
Win32=true

[Mozilla/* (Windows NT 5.0;*) Opera 9.3*]
Parent=Opera 9.3
Platform=Win2000
Win32=true

[Mozilla/* (Windows NT 5.1;*) Opera 9.3*]
Parent=Opera 9.3
Platform=WinXP
Win32=true

[Mozilla/* (Windows NT 5.2;*) Opera 9.3*]
Parent=Opera 9.3
Platform=Win2003
Win32=true

[Mozilla/* (X11; Linux*) Opera 9.3*]
Parent=Opera 9.3
Platform=Linux

[Opera/9.3* (Linux*)*]
Parent=Opera 9.3
Platform=Linux

[Opera/9.3* (Macintosh; *Mac OS X;*)*]
Parent=Opera 9.3
Platform=MacOSX

[Opera/9.3* (Windows 95*)*]
Parent=Opera 9.3
Platform=Win95
Win32=true

[Opera/9.3* (Windows 98*)*]
Parent=Opera 9.3
Platform=Win98
Win32=true

[Opera/9.3* (Windows CE*)*]
Parent=Opera 9.3
Platform=WinCE
Win32=true

[Opera/9.3* (Windows ME*)*]
Parent=Opera 9.3
Platform=WinME
Win32=true

[Opera/9.3* (Windows NT 4.0*)*]
Parent=Opera 9.3
Platform=WinNT
Win32=true

[Opera/9.3* (Windows NT 5.0*)*]
Parent=Opera 9.3
Platform=Win2000
Win32=true

[Opera/9.3* (Windows NT 5.1*)*]
Parent=Opera 9.3
Platform=WinXP
Win32=true

[Opera/9.3* (Windows NT 5.2*)*]
Parent=Opera 9.3
Platform=Win2003
Win32=true

[Opera/9.3* (Windows NT 6.0*)*]
Parent=Opera 9.3
Platform=WinVista
Win32=true

[Opera/9.3* (Windows XP*)*]
Parent=Opera 9.3
Platform=WinXP
Win32=true

[Opera/9.3* (X11; FreeBSD*)*]
Parent=Opera 9.3
Platform=FreeBSD

[Opera/9.3* (X11; Linux*)*]
Parent=Opera 9.3
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 4.0

[Netscape 4.0]
Parent=DefaultProperties
Browser="Netscape"
Version=4.0
MajorVer=4
Frames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/4.0*(Macintosh*]
Parent=Netscape 4.0
Version=4.03
MinorVer=03
Platform=MacPPC

[Mozilla/4.0*(Win95;*]
Parent=Netscape 4.0
Platform=Win95

[Mozilla/4.0*(Win98;*]
Parent=Netscape 4.0
Version=4.03
MinorVer=03
Platform=Win98

[Mozilla/4.0*(WinNT*]
Parent=Netscape 4.0
Version=4.03
MinorVer=03
Platform=WinNT

[Mozilla/4.0*(X11;*)]
Parent=Netscape 4.0
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 4.5

[Netscape 4.5]
Parent=DefaultProperties
Browser="Netscape"
Version=4.5
MajorVer=4
MinorVer=5
Frames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/4.5*(Macintosh; ?; PPC)]
Parent=Netscape 4.5
Platform=MacPPC

[Mozilla/4.5*(Win2000; ?)]
Parent=Netscape 4.5
Platform=Win2000

[Mozilla/4.5*(Win95; ?)]
Parent=Netscape 4.5
Platform=Win95

[Mozilla/4.5*(Win98; ?)]
Parent=Netscape 4.5
Platform=Win98

[Mozilla/4.5*(WinME; ?)]
Parent=Netscape 4.5
Platform=WinME

[Mozilla/4.5*(WinNT; ?)]
Parent=Netscape 4.5
Platform=WinNT

[Mozilla/4.5*(WinXP; ?)]
Parent=Netscape 4.5
Platform=WinXP

[Mozilla/4.5*(X11*)]
Parent=Netscape 4.5
Platform=Linux

[Mozilla/4.51*(Macintosh; ?; PPC)]
Parent=Netscape 4.5
Version=4.51
MinorVer=51

[Mozilla/4.51*(Win2000; ?)]
Parent=Netscape 4.5
Version=4.51
MinorVer=51
Platform=Win2000

[Mozilla/4.51*(Win95; ?)]
Parent=Netscape 4.5
Version=4.51
MinorVer=51
Platform=Win95

[Mozilla/4.51*(Win98; ?)]
Parent=Netscape 4.5
Version=4.51
MinorVer=51
Platform=Win98

[Mozilla/4.51*(WinME; ?)]
Parent=Netscape 4.5
Version=4.51
MinorVer=51
Platform=WinME

[Mozilla/4.51*(WinNT; ?)]
Parent=Netscape 4.5
Version=4.51
MinorVer=51
Platform=WinNT

[Mozilla/4.51*(WinXP; ?)]
Parent=Netscape 4.5
Version=4.51
MinorVer=51
Platform=WinXP

[Mozilla/4.51*(X11*)]
Parent=Netscape 4.5
Version=4.51
MinorVer=51
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 4.6

[Netscape 4.6]
Parent=DefaultProperties
Browser="Netscape"
Version=4.6
MajorVer=4
MinorVer=6
Frames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/4.6 * (OS/2; ?)]
Parent=Netscape 4.6
Platform=OS/2

[Mozilla/4.6*(CJPENNYCATE 3.2.11��tst 101000562$$)]
Parent=Netscape 4.6

[Mozilla/4.6*(Macintosh; ?; PPC)]
Parent=Netscape 4.6
Platform=MacPPC

[Mozilla/4.6*(Win95; ?)]
Parent=Netscape 4.6
Platform=Win95

[Mozilla/4.6*(Win98; ?)]
Parent=Netscape 4.6
Platform=Win98

[Mozilla/4.6*(WinNT; ?)]
Parent=Netscape 4.6
Platform=WinNT

[Mozilla/4.61*(Macintosh; ?; PPC)]
Parent=Netscape 4.6
Version=4.61
MajorVer=4
MinorVer=61
Platform=MacPPC

[Mozilla/4.61*(OS/2; ?)]
Parent=Netscape 4.6
Version=4.61
MajorVer=4
MinorVer=61
Platform=OS/2

[Mozilla/4.61*(Win95; ?)]
Parent=Netscape 4.6
Version=4.61
MajorVer=4
MinorVer=61
Platform=Win95

[Mozilla/4.61*(Win98; ?)]
Parent=Netscape 4.6
Version=4.61
Platform=Win98

[Mozilla/4.61*(WinNT; ?)]
Parent=Netscape 4.6
Version=4.61
MajorVer=4
MinorVer=61
Platform=WinNT

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 4.7

[Netscape 4.7]
Parent=DefaultProperties
Browser="Netscape"
Version=4.7
MajorVer=4
MinorVer=7
Frames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/4.7 * (Win2000; ?)]
Parent=Netscape 4.7
Platform=Win2000

[Mozilla/4.7*(Macintosh; ?; PPC)*]
Parent=Netscape 4.7
MinorVer=7
Platform=MacPPC

[Mozilla/4.7*(Win95; ?)*]
Parent=Netscape 4.7
MinorVer=7
Platform=Win95

[Mozilla/4.7*(Win98; ?)*]
Parent=Netscape 4.7
MinorVer=7
Platform=Win98

[Mozilla/4.7*(Windows NT 4.0; ?)*]
Parent=Netscape 4.7
MinorVer=7
Platform=WinNT
Win32=true

[Mozilla/4.7*(Windows NT 5.0; ?)*]
Parent=Netscape 4.7
MinorVer=7
Platform=Win2000
Win32=true

[Mozilla/4.7*(Windows NT 5.1; ?)*]
Parent=Netscape 4.7
MinorVer=7
Platform=WinXP
Win32=true

[Mozilla/4.7*(WinNT; ?)*]
Parent=Netscape 4.7
Platform=WinNT

[Mozilla/4.7*(X11*)*]
Parent=Netscape 4.7
Platform=Linux

[Mozilla/4.7*(X11; ?; SunOS*)*]
Parent=Netscape 4.7
Platform=SunOS

[Mozilla/4.71*(Macintosh; ?; PPC)*]
Parent=Netscape 4.7
Version=4.71
MinorVer=71
Platform=MacPPC

[Mozilla/4.71*(Win95; ?)*]
Parent=Netscape 4.7
Version=4.71
MinorVer=71
Platform=Win95

[Mozilla/4.71*(Win98; ?)*]
Parent=Netscape 4.7
Version=4.71
MinorVer=71
Platform=Win98

[Mozilla/4.71*(Windows NT 4.0; ?)*]
Parent=Netscape 4.7
Version=4.71
MinorVer=71
Platform=WinNT
Win32=true

[Mozilla/4.71*(Windows NT 5.0; ?)*]
Parent=Netscape 4.7
Version=4.71
MinorVer=71
Platform=Win2000
Win32=true

[Mozilla/4.71*(Windows NT 5.1; ?)*]
Parent=Netscape 4.7
Version=4.71
MinorVer=71
Platform=WinXP
Win32=true

[Mozilla/4.71*(WinNT; ?)*]
Parent=Netscape 4.7
Version=4.71
MinorVer=71
Platform=WinNT

[Mozilla/4.71*(X11*)*]
Parent=Netscape 4.7
Version=4.71
MinorVer=71
Platform=Linux

[Mozilla/4.71*(X11; ?; SunOS*)*]
Parent=Netscape 4.7
Version=4.71
MinorVer=71
Platform=SunOS

[Mozilla/4.72*(Macintosh; ?; PPC)*]
Parent=Netscape 4.7
MinorVer=72
Platform=MacPPC

[Mozilla/4.72*(Win95; ?)*]
Parent=Netscape 4.7
MinorVer=72
Platform=Win95

[Mozilla/4.72*(Win98; ?)*]
Parent=Netscape 4.7
MinorVer=72
Platform=Win98

[Mozilla/4.72*(Windows NT 4.0; ?)*]
Parent=Netscape 4.7
MinorVer=72
Platform=WinNT
Win32=true

[Mozilla/4.72*(Windows NT 5.0; ?)*]
Parent=Netscape 4.7
MinorVer=72
Platform=Win2000
Win32=true

[Mozilla/4.72*(Windows NT 5.1; ?)*]
Parent=Netscape 4.7
MinorVer=72
Platform=WinXP
Win32=true

[Mozilla/4.72*(WinNT; ?)*]
Parent=Netscape 4.7
MinorVer=72
Platform=WinNT

[Mozilla/4.72*(X11*)*]
Parent=Netscape 4.7
MinorVer=72
Platform=Linux

[Mozilla/4.72*(X11; ?; SunOS*)*]
Parent=Netscape 4.7
MinorVer=72
Platform=SunOS

[Mozilla/4.73*(Macintosh; ?; PPC)*]
Parent=Netscape 4.7
MinorVer=73
Platform=MacPPC

[Mozilla/4.73*(Win95; ?)*]
Parent=Netscape 4.7
MinorVer=73
Platform=Win95

[Mozilla/4.73*(Win98; ?)*]
Parent=Netscape 4.7
MinorVer=73
Platform=Win98

[Mozilla/4.73*(Windows NT 4.0; ?)*]
Parent=Netscape 4.7
MinorVer=73
Platform=WinNT
Win32=true

[Mozilla/4.73*(Windows NT 5.0; ?)*]
Parent=Netscape 4.7
MinorVer=73
Platform=Win2000
Win32=true

[Mozilla/4.73*(Windows NT 5.1; ?)*]
Parent=Netscape 4.7
MinorVer=73
Platform=WinXP
Win32=true

[Mozilla/4.73*(WinNT; ?)*]
Parent=Netscape 4.7
MinorVer=73
Platform=WinNT

[Mozilla/4.73*(X11*)*]
Parent=Netscape 4.7
MinorVer=73
Platform=Linux

[Mozilla/4.73*(X11; ?; SunOS*)*]
Parent=Netscape 4.7
MinorVer=73
Platform=SunOS

[Mozilla/4.74*(Macintosh; ?; PPC)*]
Parent=Netscape 4.7
MinorVer=74
Platform=MacPPC

[Mozilla/4.74*(Win95; ?)*]
Parent=Netscape 4.7
MinorVer=74
Platform=Win95

[Mozilla/4.74*(Win98; ?)*]
Parent=Netscape 4.7
MinorVer=74
Platform=Win98

[Mozilla/4.74*(Windows NT 4.0; ?)*]
Parent=Netscape 4.7
MinorVer=74
Platform=WinNT
Win32=true

[Mozilla/4.74*(Windows NT 5.0; ?)*]
Parent=Netscape 4.7
MinorVer=74
Platform=Win2000
Win32=true

[Mozilla/4.74*(Windows NT 5.1; ?)*]
Parent=Netscape 4.7
MinorVer=74
Platform=WinXP
Win32=true

[Mozilla/4.74*(WinNT; ?)*]
Parent=Netscape 4.7
MinorVer=74
Platform=WinNT

[Mozilla/4.74*(X11*)*]
Parent=Netscape 4.7
MinorVer=74
Platform=Linux

[Mozilla/4.74*(X11; ?; SunOS*)*]
Parent=Netscape 4.7
MinorVer=74
Platform=SunOS

[Mozilla/4.75*(Macintosh; ?; PPC)*]
Parent=Netscape 4.7
MinorVer=75
Platform=MacPPC

[Mozilla/4.75*(Win95; ?)*]
Parent=Netscape 4.7
MinorVer=75
Platform=Win95

[Mozilla/4.75*(Win98; ?)*]
Parent=Netscape 4.7
MinorVer=75
Platform=Win98

[Mozilla/4.75*(Windows NT 4.0; ?)*]
Parent=Netscape 4.7
MinorVer=75
Platform=WinNT
Win32=true

[Mozilla/4.75*(Windows NT 5.0; ?)*]
Parent=Netscape 4.7
MinorVer=75
Platform=Win2000
Win32=true

[Mozilla/4.75*(Windows NT 5.1; ?)*]
Parent=Netscape 4.7
MinorVer=75
Platform=WinXP
Win32=true

[Mozilla/4.75*(WinNT; ?)*]
Parent=Netscape 4.7
MinorVer=75
Platform=WinNT

[Mozilla/4.75*(X11*)*]
Parent=Netscape 4.7
MinorVer=75
Platform=Linux

[Mozilla/4.75*(X11; ?; SunOS*)*]
Parent=Netscape 4.7
MinorVer=75
Platform=SunOS

[Mozilla/4.76*(Macintosh; ?; PPC)*]
Parent=Netscape 4.7
MinorVer=76
Platform=MacPPC

[Mozilla/4.76*(Win95; ?)*]
Parent=Netscape 4.7
MinorVer=76
Platform=Win95

[Mozilla/4.76*(Win98; ?)*]
Parent=Netscape 4.7
MinorVer=76
Platform=Win98

[Mozilla/4.76*(Windows NT 4.0; ?)*]
Parent=Netscape 4.7
MinorVer=76
Platform=WinNT
Win32=true

[Mozilla/4.76*(Windows NT 5.0; ?)*]
Parent=Netscape 4.7
MinorVer=76
Platform=Win2000
Win32=true

[Mozilla/4.76*(Windows NT 5.1; ?)*]
Parent=Netscape 4.7
MinorVer=76
Platform=WinXP
Win32=true

[Mozilla/4.76*(WinNT; ?)*]
Parent=Netscape 4.7
MinorVer=76
Platform=WinNT

[Mozilla/4.76*(X11*)*]
Parent=Netscape 4.7
MinorVer=76
Platform=Linux

[Mozilla/4.76*(X11; ?; SunOS*)*]
Parent=Netscape 4.7
MinorVer=76
Platform=SunOS

[Mozilla/4.77*(Macintosh; ?; PPC)*]
Parent=Netscape 4.7
MinorVer=77
Platform=MacPPC

[Mozilla/4.77*(Win95; ?)*]
Parent=Netscape 4.7
MinorVer=77
Platform=Win95

[Mozilla/4.77*(Win98; ?)*]
Parent=Netscape 4.7
MinorVer=77
Platform=Win98

[Mozilla/4.77*(Windows NT 4.0; ?)*]
Parent=Netscape 4.7
MinorVer=77
Platform=WinNT
Win32=true

[Mozilla/4.77*(Windows NT 5.0; ?)*]
Parent=Netscape 4.7
MinorVer=77
Platform=Win2000
Win32=true

[Mozilla/4.77*(Windows NT 5.1; ?)*]
Parent=Netscape 4.7
MinorVer=77
Platform=WinXP
Win32=true

[Mozilla/4.77*(WinNT; ?)*]
Parent=Netscape 4.7
MinorVer=77
Platform=WinNT

[Mozilla/4.77*(X11*)*]
Parent=Netscape 4.7
MinorVer=77
Platform=Linux

[Mozilla/4.77*(X11; ?; SunOS*)*]
Parent=Netscape 4.7
MinorVer=77
Platform=SunOS

[Mozilla/4.78*(Macintosh; ?; PPC)*]
Parent=Netscape 4.7
MinorVer=78
Platform=MacPPC

[Mozilla/4.78*(Win95; ?)*]
Parent=Netscape 4.7
MinorVer=78
Platform=Win95

[Mozilla/4.78*(Win98; ?)*]
Parent=Netscape 4.7
MinorVer=78
Platform=Win98

[Mozilla/4.78*(Windows NT 4.0; ?)*]
Parent=Netscape 4.7
MinorVer=78
Platform=WinNT
Win32=true

[Mozilla/4.78*(Windows NT 5.0; ?)*]
Parent=Netscape 4.7
MinorVer=78
Platform=Win2000
Win32=true

[Mozilla/4.78*(Windows NT 5.1; ?)*]
Parent=Netscape 4.7
MinorVer=78
Platform=WinXP
Win32=true

[Mozilla/4.78*(WinNT; ?)*]
Parent=Netscape 4.7
MinorVer=78
Platform=WinNT

[Mozilla/4.78*(X11*)*]
Parent=Netscape 4.7
MinorVer=78
Platform=Linux

[Mozilla/4.78*(X11; ?; SunOS*)*]
Parent=Netscape 4.7
MinorVer=78
Platform=SunOS

[Mozilla/4.79*(Macintosh; ?; PPC)*]
Parent=Netscape 4.7
Version=4.79
MinorVer=79
Platform=MacPPC

[Mozilla/4.79*(Win95; ?)*]
Parent=Netscape 4.7
Version=4.79
MinorVer=79
Platform=Win95

[Mozilla/4.79*(Win98; ?)*]
Parent=Netscape 4.7
Version=4.79
MinorVer=79
Platform=Win98

[Mozilla/4.79*(Windows NT 4.0; ?)*]
Parent=Netscape 4.7
Version=4.79
MinorVer=79
Platform=WinNT
Win32=true

[Mozilla/4.79*(Windows NT 5.0; ?)*]
Parent=Netscape 4.7
Version=4.79
MinorVer=79
Platform=Win2000
Win32=true

[Mozilla/4.79*(Windows NT 5.1; ?)*]
Parent=Netscape 4.7
Version=4.79
MinorVer=79
Platform=WinXP
Win32=true

[Mozilla/4.79*(WinNT; ?)*]
Parent=Netscape 4.7
Version=4.79
MinorVer=79
Platform=WinNT

[Mozilla/4.79*(X11*)*]
Parent=Netscape 4.7
Version=4.79
MinorVer=79
Platform=Linux

[Mozilla/4.79*(X11; ?; SunOS*)*]
Parent=Netscape 4.7
Version=4.79
MinorVer=79
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 4.8

[Netscape 4.8]
Parent=DefaultProperties
Browser="Netscape"
Version=4.8
MajorVer=4
MinorVer=8
Frames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

[Mozilla/4.8*(Macintosh; ?; MacPPC)*]
Parent=Netscape 4.8
Platform=MacPPC

[Mozilla/4.8*(Macintosh; ?; PPC Mac OS X*]
Parent=Netscape 4.8
Platform=MacOSX

[Mozilla/4.8*(Macintosh; ?; PPC)*]
Parent=Netscape 4.8
Platform=MacPPC

[Mozilla/4.8*(Win95; *)*]
Parent=Netscape 4.8

[Mozilla/4.8*(Win98; *)*]
Parent=Netscape 4.8
Platform=Win98

[Mozilla/4.8*(Windows NT 4.0; *)*]
Parent=Netscape 4.8
Platform=WinNT
Win32=true

[Mozilla/4.8*(Windows NT 5.0; *)*]
Parent=Netscape 4.8
Platform=Win2000
Win32=true

[Mozilla/4.8*(Windows NT 5.1; *)*]
Parent=Netscape 4.8
Platform=WinXP
Win32=true

[Mozilla/4.8*(WinNT; *)*]
Parent=Netscape 4.8
Platform=WinNT

[Mozilla/4.8*(X11; *)*]
Parent=Netscape 4.8
Platform=Linux

[Mozilla/4.8*(X11; *SunOS*)*]
Parent=Netscape 4.8
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 6.0

[Netscape 6.0]
Parent=DefaultProperties
Browser="Netscape"
Version=6.0
MajorVer=6
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; ?; PPC;*) Gecko/* Netscape6/6.0*]
Parent=Netscape 6.0
Platform=MacPPC

[Mozilla/5.0 (Windows; ?; Win95;*) Gecko/* Netscape6/6.0*]
Parent=Netscape 6.0
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *) Gecko/* Netscape6/6.0*]
Parent=Netscape 6.0
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Win9x 4.90; *) Gecko/* Netscape6/6.0*]
Parent=Netscape 6.0
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 4.0; *) Gecko/* Netscape6/6.0*]
Parent=Netscape 6.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *) Gecko/* Netscape6/6.0*]
Parent=Netscape 6.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *) Gecko/* Netscape6/6.0*]
Parent=Netscape 6.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *) Gecko/* Netscape6/6.0*]
Parent=Netscape 6.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.0; *) Gecko/* Netscape6/6.0*]
Parent=Netscape 6.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.1; *) Gecko/* Netscape6/6.0*]
Parent=Netscape 6.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (X11; ?; *) Gecko/* Netscape6/6.0*]
Parent=Netscape 6.0
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 6.1

[Netscape 6.1]
Parent=DefaultProperties
Browser="Netscape"
Version=6.1
MajorVer=6
MinorVer=1
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; ?; PPC;*) Gecko/* Netscape6/6.1*]
Parent=Netscape 6.1
Platform=MacPPC

[Mozilla/5.0 (Windows; ?; Win95;*) Gecko/* Netscape6/6.1*]
Parent=Netscape 6.1
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *) Gecko/* Netscape6/6.1*]
Parent=Netscape 6.1
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Win9x 4.90; *) Gecko/* Netscape6/6.1*]
Parent=Netscape 6.1
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 4.0; *) Gecko/* Netscape6/6.1*]
Parent=Netscape 6.1
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *) Gecko/* Netscape6/6.1*]
Parent=Netscape 6.1
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *) Gecko/* Netscape6/6.1*]
Parent=Netscape 6.1
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *) Gecko/* Netscape6/6.1*]
Parent=Netscape 6.1
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.0; *) Gecko/* Netscape6/6.1*]
Parent=Netscape 6.1
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.1; *) Gecko/* Netscape6/6.1*]
Parent=Netscape 6.1
Platform=WinXP
Win32=true

[Mozilla/5.0 (X11; ?; *) Gecko/* Netscape6/6.1*]
Parent=Netscape 6.1
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 6.2

[Netscape 6.2]
Parent=DefaultProperties
Browser="Netscape"
Version=6.2
MajorVer=6
MinorVer=2
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; ?; PPC Mac OS X*) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=MacOSX

[Mozilla/5.0 (Macintosh; ?; PPC;*) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=MacPPC

[Mozilla/5.0 (Windows; ?; Win 9x 4.90; *) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Win32=true

[Mozilla/5.0 (Windows; ?; Win95;*) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Win9x 4.90; *) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 4.0; *) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.2; *) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.0; *) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.1; *) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.2; *) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=Win2003
Win32=true

[Mozilla/5.0 (X11; ?; *) Gecko/* Netscape6/6.2*]
Parent=Netscape 6.2
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 7.0

[Netscape 7.0]
Parent=DefaultProperties
Browser="Netscape"
Version=7.0
MajorVer=7
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; ?; PPC Mac OS X;*) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=MacOSX

[Mozilla/5.0 (Macintosh; ?; PPC;*) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=MacPPC

[Mozilla/5.0 (Windows; ?; Win*9x 4.90; *) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Win95;*) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 4.0; *) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.2; *) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.0; *) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.1; *) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.2; *) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=Win2003
Win32=true

[Mozilla/5.0 (X11; ?; *) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=Linux

[Mozilla/5.0 (X11; ?; SunOS*) Gecko/* Netscape*/7.0*]
Parent=Netscape 7.0
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 7.1

[Netscape 7.1]
Parent=DefaultProperties
Browser="Netscape"
Version=7.1
MajorVer=7
MinorVer=1
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; ?; PPC Mac OS X Mach-O; *; rv:*) Gecko/* Netscape*/7.1]
Parent=Netscape 7.1
Platform=MacOSX

[Mozilla/5.0 (Macintosh; ?; PPC Mac OS X;*) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=MacOSX

[Mozilla/5.0 (Macintosh; ?; PPC;*) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=MacPPC

[Mozilla/5.0 (Windows; ?; Win 9x 4.90; *) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Win95;*) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Win9x 4.90; *) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 4.0; *) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.2; *) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.0; *) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.1; *) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.2; *) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=Win2003
Win32=true

[Mozilla/5.0 (X11; ?; *) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=Linux

[Mozilla/5.0 (X11; ?; SunOS*) Gecko/* Netscape*/7.1*]
Parent=Netscape 7.1
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 7.2

[Netscape 7.2]
Parent=DefaultProperties
Browser="Netscape"
Version=7.2
MajorVer=7
MinorVer=2
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; ?; PPC Mac OS X Mach-O; *; rv:*) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=MacOSX

[Mozilla/5.0 (Macintosh; ?; PPC Mac OS X;*) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=MacOSX

[Mozilla/5.0 (Macintosh; ?; PPC;*) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=MacPPC

[Mozilla/5.0 (Windows; ?; Win 9x 4.90; *) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Win95;*) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Win9x 4.90; *) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 4.0; *) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.2; *) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.0; *) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.1; *) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.2; *) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=Win2003
Win32=true

[Mozilla/5.0 (X11; ?; *) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=Linux

[Mozilla/5.0 (X11; ?; SunOS*) Gecko/* Netscape*/7.2*]
Parent=Netscape 7.2
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 8.0

[Netscape 8.0]
Parent=DefaultProperties
Browser="Netscape"
Version=8.0
MajorVer=8
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; ?; PPC Mac OS X Mach-O; *; rv:*) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=MacOSX

[Mozilla/5.0 (Macintosh; ?; PPC Mac OS X;*) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=MacOSX

[Mozilla/5.0 (Macintosh; ?; PPC;*) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=MacPPC

[Mozilla/5.0 (Windows; ?; Win 9x 4.90; *) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Win95;*) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Win9x 4.90; *) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 4.0; *) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.2; *) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.0; *) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.1; *) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.2; *) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=Win2003
Win32=true

[Mozilla/5.0 (X11; ?; *) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=Linux

[Mozilla/5.0 (X11; ?; SunOS*) Gecko/* Netscape*/8.0*]
Parent=Netscape 8.0
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Netscape 8.1

[Netscape 8.1]
Parent=DefaultProperties
Browser="Netscape"
Version=8.1
MajorVer=8
MinorVer=1
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; ?; *Mac OS X*) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=MacOSX

[Mozilla/5.0 (Macintosh; ?; PPC;*) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=MacPPC

[Mozilla/5.0 (Windows; ?; Win 9x 4.90; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Win95;*) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Win9x 4.90; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 4.0; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.2; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 6.0; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=WinVista
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.0; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.1; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT5.2; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT6.0; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=WinVista
Win32=true

[Mozilla/5.0 (X11; ?; *) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=Linux

[Mozilla/5.0 (X11; ?; SunOS*) Gecko/* Netscape*/8.1*]
Parent=Netscape 8.1
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Firebird

[Firebird]
Parent=DefaultProperties
Browser="Firebird"
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Linux; *; rv:1.*) Gecko/* Mozilla Firebird/0.*]
Parent=Firebird

[Mozilla/5.0 (Macintosh; *; *Mac OS X*; *; rv:1.*) Gecko/* Firebird/0.*]
Parent=Firebird

[Mozilla/5.0 (Macintosh; *; *Mac OS X*; *; rv:1.*) Gecko/* Mozilla Firebird/0.*]
Parent=Firebird

[Mozilla/5.0 (OS/2; *; Warp*; *; rv:1.*) Gecko/* Firebird/0.*]
Parent=Firebird

[Mozilla/5.0 (Windows; *; Win 9x 4.90; *; rv:1.*) Gecko/* Firebird/0.*]
Parent=Firebird
Win32=true

[Mozilla/5.0 (Windows; *; Win 9x 4.90; *; rv:1.*) Gecko/* Mozilla Firebird/0.*]
Parent=Firebird
Win32=true

[Mozilla/5.0 (Windows; *; Win95; *; rv:1.*) Gecko/* Firebird/0.*]
Parent=Firebird
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.*) Gecko/* Firebird/0.*]
Parent=Firebird
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.*) Gecko/* Mozilla Firebird/0.*]
Parent=Firebird
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.?; *; rv:1.*) Gecko/* Firebird Browser/0.*]
Parent=Firebird
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.?; *; rv:1.*) Gecko/* Firebird/0.*]
Parent=Firebird
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.?; *; rv:1.*) Gecko/* Mozilla Firebird/0.*]
Parent=Firebird
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.?; rv:1.*) Gecko/* Firebird/0.*]
Parent=Firebird
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 6.*; *; rv:1.*) Gecko/* Firebird/0.*]
Parent=Firebird
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; *; rv:1.*) Gecko/* Firebird/0.*]
Parent=Firebird
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; *; rv:1.*) Gecko/* Mozilla Firebird/0.*]
Parent=Firebird
Win32=true

[Mozilla/5.0 (X11; *; FreeBSD*; *; rv:1.*) Gecko/* Firebird/0.*]
Parent=Firebird

[Mozilla/5.0 (X11; *; FreeBSD*; *; rv:1.*) Gecko/* Mozilla Firebird/0.*]
Parent=Firebird

[Mozilla/5.0 (X11; *; IRIX*; *; rv:1.*) Gecko/* Mozilla Firebird/0.*]
Parent=Firebird

[Mozilla/5.0 (X11; *; Linux*; *; rv:1.*) Gecko/* Firebird/0.*]
Parent=Firebird

[Mozilla/5.0 (X11; *; OpenBSD*; *; rv:1.*) Gecko/* Mozilla Firebird/0.*]
Parent=Firebird

[Mozilla/5.0 (X11; *; SunOS*; *; rv:1.*) Gecko/* Firebird/0.*]
Parent=Firebird

[Mozilla/5.0 (X11; *; SunOS*; *; rv:1.*) Gecko/* Mozilla Firebird/0.*]
Parent=Firebird

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Firefox

[Firefox]
Parent=DefaultProperties
Browser="Firefox"
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Macintosh; *; *Mac OS X*; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Platform=MacOSX

[Mozilla/5.0 (Macintosh; *; *Mac OS X*; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox

[Mozilla/5.0 (OS/2; *; Warp*; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox

[Mozilla/5.0 (Windows NT 5.?; ?; rv:1.*) Gecko/* Firefox]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; Win 9x 4.90; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; *; Win 9x 4.90; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; Win95; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; *; Win95; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; *; Win98; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.*; *; rv:1.*) Gecko/* Deer Park/Alpha*]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.?; *; rv:1.*) Gecko/* Firefox/10.5]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 6.0*; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Platform=WinVista
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 6.0*; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Win32=true

[Mozilla/5.0 (X11; *; FreeBSD*; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Platform=FreeBSD

[Mozilla/5.0 (X11; *; FreeBSD*; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox

[Mozilla/5.0 (X11; *; HP-UX*; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Platform=HP-UX

[Mozilla/5.0 (X11; *; IRIX64*; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Platform=IRIX64

[Mozilla/5.0 (X11; *; Linux*; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox

[Mozilla/5.0 (X11; *; Linux*; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox

[Mozilla/5.0 (X11; *; OpenBSD*; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Platform=OpenBSD

[Mozilla/5.0 (X11; *; SunOS*; *; rv:1.*) Gecko/* Firefox/0.*]
Parent=Firefox
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Firefox 1.0

[Firefox 1.0]
Parent=DefaultProperties
Browser="Firefox"
Version=1.0
MajorVer=1
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Linux; *; PPC*; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=MacPPC

[Mozilla/5.0 (Macintosh; *; *Mac OS X*; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=MacOSX

[Mozilla/5.0 (OS/2; *; Warp*; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=OS/2

[Mozilla/5.0 (Windows; *; Win 9x 4.90*; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; *; Win95; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 6.0*; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=WinVista
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (X11; *; *Linux*; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=Linux

[Mozilla/5.0 (X11; *; *Linux*; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=Linux

[Mozilla/5.0 (X11; *; DragonFly*; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0

[Mozilla/5.0 (X11; *; FreeBSD*; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=FreeBSD

[Mozilla/5.0 (X11; *; HP-UX*; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=HP-UX

[Mozilla/5.0 (X11; *; IRIX64*; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=IRIX64

[Mozilla/5.0 (X11; *; OpenBSD*; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=OpenBSD

[Mozilla/5.0 (X11; *; SunOS*; *; rv:1.*) Gecko/* Firefox/1.0*]
Parent=Firefox 1.0
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Firefox 1.4

[Firefox 1.4]
Parent=DefaultProperties
Browser="Firefox"
Version=1.4
MajorVer=1
MinorVer=4
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Linux; *; PPC*; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=Linux

[Mozilla/5.0 (Macintosh; *; *Mac OS X*; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=MacOSX

[Mozilla/5.0 (OS/2; *; Warp*; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=OS/2

[Mozilla/5.0 (Windows; *; Win 9x 4.90; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; *; Win95*; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 6.0; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=WinVista
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=WinNT
Win32=true

[Mozilla/5.0 (X11; *; *Linux*; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=Linux

[Mozilla/5.0 (X11; *; FreeBSD*; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=FreeBSD

[Mozilla/5.0 (X11; *; HP-UX*; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=HP-UX

[Mozilla/5.0 (X11; *; IRIX64*; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=IRIX64

[Mozilla/5.0 (X11; *; OpenBSD*; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=OpenBSD

[Mozilla/5.0 (X11; *; SunOS*; *; rv:1.*) Gecko/* Firefox/1.4*]
Parent=Firefox 1.4
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Firefox 1.5

[Firefox 1.5]
Parent=DefaultProperties
Browser="Firefox"
Version=1.5
MajorVer=1
MinorVer=5
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Linux; *; PPC*; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=Linux

[Mozilla/5.0 (Macintosh; *; *Mac OS X*; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=MacOSX

[Mozilla/5.0 (OS/2; *; Warp*; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=OS/2

[Mozilla/5.0 (rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5

[Mozilla/5.0 (Windows; *; Win 9x 4.90; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; *; Win95; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2 x64; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 6.0; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=WinVista
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=WinNT
Win32=true

[Mozilla/5.0 (X11; *; *Linux*; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=Linux

[Mozilla/5.0 (X11; *; FreeBSD*; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=FreeBSD

[Mozilla/5.0 (X11; *; HP-UX*; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=HP-UX

[Mozilla/5.0 (X11; *; IRIX64*; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=IRIX64

[Mozilla/5.0 (X11; *; OpenBSD*; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=OpenBSD

[Mozilla/5.0 (X11; *; SunOS*; *; rv:1.*) Gecko/* Firefox/1.5*]
Parent=Firefox 1.5
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Firefox 2.0

[Firefox 2.0]
Parent=DefaultProperties
Browser="Firefox"
Version=2.0
MajorVer=2
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Linux; *; PPC*; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=Linux

[Mozilla/5.0 (Macintosh; *; *Mac OS X*; *; rv:1.8*) Gecko/* BonEcho/2.0*]
Parent=Firefox 2.0
Platform=MacOSX

[Mozilla/5.0 (Macintosh; *; *Mac OS X*; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=MacOSX

[Mozilla/5.0 (OS/2; *; Warp*; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=OS/2

[Mozilla/5.0 (Windows; *; Win 9x 4.90; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; *; Win95; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0; *; rv:1.*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0; *; rv:1.8*) Gecko/* BonEcho/2.0*]
Parent=Firefox 2.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.8*) Gecko/* BonEcho/2.0*]
Parent=Firefox 2.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2; *; rv:1.8*) Gecko/* BonEcho/2.0*]
Parent=Firefox 2.0
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 6.0*; *; rv:1.8*) Gecko/* BonEcho/2.0*]
Parent=Firefox 2.0
Platform=WinVista
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 6.0; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=WinVista
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (X11; *; *Linux*; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=Linux

[Mozilla/5.0 (X11; *; FreeBSD*; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=FreeBSD

[Mozilla/5.0 (X11; *; HP-UX*; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=HP-UX

[Mozilla/5.0 (X11; *; IRIX64*; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=IRIX64

[Mozilla/5.0 (X11; *; Linux*; *; rv:1.8*) Gecko/* BonEcho/2.0*]
Parent=Firefox 2.0
Platform=Linux

[Mozilla/5.0 (X11; *; OpenBSD*; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=OpenBSD

[Mozilla/5.0 (X11; *; SunOS*; *; rv:1.8*) Gecko/* Firefox/2.0*]
Parent=Firefox 2.0
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Firefox 3.0

[Firefox 3.0]
Parent=DefaultProperties
Browser="Firefox"
Version=3.0
MajorVer=3
Alpha=true
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Linux; *; PPC*; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=Linux

[Mozilla/5.0 (Macintosh; *; *Mac OS X*; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=MacOSX

[Mozilla/5.0 (Macintosh; *; *Mac OS X*; *; rv:1.9*) Gecko/* Minefield/3.0*]
Parent=Firefox 3.0
Platform=MacOSX

[Mozilla/5.0 (OS/2; *; Warp*; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=OS/2

[Mozilla/5.0 (Windows; *; Win 9x 4.90; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; *; Win95; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.9*) Gecko/* Minefield/3.0*]
Parent=Firefox 3.0
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 6.0; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=WinVista
Win32=true

[Mozilla/5.0 (Windows; *; WinNT4.0; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=WinNT
Win32=true

[Mozilla/5.0 (Windows; U; Windows NT 5.1 x64; *; rv:1.9*) Gecko/* Minefield/3.0*]
Parent=Firefox 3.0
Platform=WinXP
Win32=false
Win64=true

[Mozilla/5.0 (Windows; U; Windows NT 5.2 x64; *; rv:1.9*) Gecko/* Minefield/3.0*]
Parent=Firefox 3.0
Platform=Win2003
Win32=false
Win64=true

[Mozilla/5.0 (X11; *; *Linux*; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=Linux

[Mozilla/5.0 (X11; *; *Linux*; *; rv:1.9*) Gecko/* Minefield/3.0*]
Parent=Firefox 3.0
Platform=Linux

[Mozilla/5.0 (X11; *; FreeBSD*; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=FreeBSD

[Mozilla/5.0 (X11; *; HP-UX*; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=HP-UX

[Mozilla/5.0 (X11; *; IRIX64*; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=IRIX64

[Mozilla/5.0 (X11; *; OpenBSD*; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=OpenBSD

[Mozilla/5.0 (X11; *; SunOS*; *; rv:1.9*) Gecko/* Firefox/3.0*]
Parent=Firefox 3.0
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Phoenix

[Phoenix]
Parent=DefaultProperties
Browser="Phoenix"
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (Windows; *; Win 9x 4.90; *; rv:1.4*) Gecko/* Phoenix/0.5*]
Parent=Phoenix
Version=0.5
MajorVer=0
MinorVer=5
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; *; Win98; *; rv:1.4*) Gecko/* Phoenix/0.5*]
Parent=Phoenix
Version=0.5
MajorVer=0
MinorVer=5
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.0*; *; rv:1.4*) Gecko/* Phoenix/0.5*]
Parent=Phoenix
Version=0.5
MajorVer=0
MinorVer=5
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.1; *; rv:1.4*) Gecko/* Phoenix/0.5*]
Parent=Phoenix
Version=0.5
MajorVer=0
MinorVer=5
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; *; Windows NT 5.2*; *; rv:1.4*) Gecko/* Phoenix/0.5*]
Parent=Phoenix
Version=0.5
MajorVer=0
MinorVer=5
Platform=Win2003
Win32=true

[Mozilla/5.0 (X11; *; Linux*; *; rv:1.4*) Gecko/* Phoenix/0.5*]
Parent=Phoenix
Version=0.5
MajorVer=0
MinorVer=5
Platform=Linux

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Mozilla 1.0

[Mozilla 1.0]
Parent=DefaultProperties
Browser="Mozilla"
Version=1.0
MajorVer=1
Beta=true
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (*rv:1.0.*) Gecko/*]
Parent=Mozilla 1.0

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Mozilla 1.1

[Mozilla 1.1]
Parent=DefaultProperties
Browser="Mozilla"
Version=1.1
MajorVer=1
MinorVer=1
Beta=true
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (*rv:1.1.*) Gecko/*]
Parent=Mozilla 1.1

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Mozilla 1.2

[Mozilla 1.2]
Parent=DefaultProperties
Browser="Mozilla"
Version=1.2
MajorVer=1
MinorVer=2
Beta=true
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (*rv:1.2.*) Gecko/*]
Parent=Mozilla 1.2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Mozilla 1.3

[Mozilla 1.3]
Parent=DefaultProperties
Browser="Mozilla"
Version=1.3
MajorVer=1
MinorVer=3
Beta=true
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (*rv:1.3.*) Gecko/*]
Parent=Mozilla 1.3

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Mozilla 1.4

[Mozilla 1.4]
Parent=DefaultProperties
Browser="Mozilla"
Version=1.4
MajorVer=1
MinorVer=4
Beta=true
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (*rv:1.4*) Gecko/*]
Parent=Mozilla 1.4

[Mozilla/5.0 (Macintosh; ?; *Mac OS X*; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=MacOSX

[Mozilla/5.0 (Windows; ?; Win 9x 4.90; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Win3.1; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=Win31
Win32=true

[Mozilla/5.0 (Windows; ?; Win3.11; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=Win31
Win16=true
Win32=true

[Mozilla/5.0 (Windows; ?; Win95; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=WinNT
Win32=true

[Mozilla/5.0 (X11; *FreeBSD*; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=FreeBSD

[Mozilla/5.0 (X11; *Linux*; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=Linux

[Mozilla/5.0 (X11; *OpenBSD*; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=OpenBSD

[Mozilla/5.0 (X11; *SunOS*; *rv:1.4*) Gecko/*]
Parent=Mozilla 1.4
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Mozilla 1.5

[Mozilla 1.5]
Parent=DefaultProperties
Browser="Mozilla"
Version=1.5
MajorVer=1
MinorVer=5
Beta=true
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (*rv:1.5*) Gecko/*]
Parent=Mozilla 1.5

[Mozilla/5.0 (Macintosh; ?; *Mac OS X*; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=MacOSX

[Mozilla/5.0 (Windows; ?; Win 9x 4.90; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Win3.1; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=Win31
Win32=true

[Mozilla/5.0 (Windows; ?; Win3.11; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=Win31
Win16=true
Win32=true

[Mozilla/5.0 (Windows; ?; Win95; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=WinNT
Win32=true

[Mozilla/5.0 (X11; *FreeBSD*; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=FreeBSD

[Mozilla/5.0 (X11; *Linux*; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=Linux

[Mozilla/5.0 (X11; *OpenBSD*; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=OpenBSD

[Mozilla/5.0 (X11; *SunOS*; *rv:1.5*) Gecko/*]
Parent=Mozilla 1.5
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Mozilla 1.6

[Mozilla 1.6]
Parent=DefaultProperties
Browser="Mozilla"
Version=1.6
MajorVer=1
MinorVer=6
Beta=true
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (*rv:1.6*) Gecko/*]
Parent=Mozilla 1.6

[Mozilla/5.0 (Macintosh; ?; *Mac OS X*; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=MacOSX

[Mozilla/5.0 (Windows; ?; Win 9x 4.90; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Win3.1; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=Win31
Win32=true

[Mozilla/5.0 (Windows; ?; Win3.11; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=Win31
Win16=true
Win32=true

[Mozilla/5.0 (Windows; ?; Win95; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=WinNT
Win32=true

[Mozilla/5.0 (X11; *FreeBSD*; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=FreeBSD

[Mozilla/5.0 (X11; *Linux*; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=Linux

[Mozilla/5.0 (X11; *OpenBSD*; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=OpenBSD

[Mozilla/5.0 (X11; *SunOS*; *rv:1.6*) Gecko/*]
Parent=Mozilla 1.6
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Mozilla 1.7

[Mozilla 1.7]
Parent=DefaultProperties
Browser="Mozilla"
Version=1.7
MajorVer=1
MinorVer=7
Beta=true
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (*rv:1.7*) Gecko/*]
Parent=Mozilla 1.7

[Mozilla/5.0 (Macintosh; ?; *Mac OS X*; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=MacOSX

[Mozilla/5.0 (Windows; ?; Win 9x 4.90; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Win3.1; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=Win31
Win32=true

[Mozilla/5.0 (Windows; ?; Win3.11; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=Win31
Win16=true
Win32=true

[Mozilla/5.0 (Windows; ?; Win95; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.2; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=WinNT
Win32=true

[Mozilla/5.0 (X11; *FreeBSD*; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=FreeBSD

[Mozilla/5.0 (X11; *Linux*; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=Linux

[Mozilla/5.0 (X11; *OpenBSD*; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=OpenBSD

[Mozilla/5.0 (X11; *SunOS*; *rv:1.7*) Gecko/*]
Parent=Mozilla 1.7
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Mozilla 1.8

[Mozilla 1.8]
Parent=DefaultProperties
Browser="Mozilla"
Version=1.8
MajorVer=1
MinorVer=8
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (*rv:1.8*) Gecko/*]
Parent=Mozilla 1.8

[Mozilla/5.0 (Macintosh; ?; *Mac OS X*; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=MacOSX

[Mozilla/5.0 (Windows; ?; Win 9x 4.90; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Win3.1; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Win32=true

[Mozilla/5.0 (Windows; ?; Win3.11; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=Win31
Win16=true
Win32=true

[Mozilla/5.0 (Windows; ?; Win95; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.2; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=WinNT
Win32=true

[Mozilla/5.0 (X11; *FreeBSD*; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=FreeBSD

[Mozilla/5.0 (X11; *Linux*; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=Linux

[Mozilla/5.0 (X11; *OpenBSD*; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=OpenBSD

[Mozilla/5.0 (X11; *SunOS*; *rv:1.8*) Gecko/*]
Parent=Mozilla 1.8
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Mozilla 1.9

[Mozilla 1.9]
Parent=DefaultProperties
Browser="Mozilla 1.9"
Version=1.9
MajorVer=1
MinorVer=9
Alpha=true
Frames=true
IFrames=true
Tables=true
Cookies=true
JavaApplets=true
JavaScript=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/5.0 (*rv:1.9*) Gecko/*]
Parent=Mozilla 1.9

[Mozilla/5.0 (Macintosh; ?; *Mac OS X*; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=MacOSX

[Mozilla/5.0 (Windows; ?; Win 9x 4.90; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=WinME
Win32=true

[Mozilla/5.0 (Windows; ?; Win3.1; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Win32=true

[Mozilla/5.0 (Windows; ?; Win3.11; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=Win31
Win16=true
Win32=true

[Mozilla/5.0 (Windows; ?; Win95; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=Win95
Win32=true

[Mozilla/5.0 (Windows; ?; Win98; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=Win98
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.0; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=Win2000
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.1; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=WinXP
Win32=true

[Mozilla/5.0 (Windows; ?; Windows NT 5.2; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=Win2003
Win32=true

[Mozilla/5.0 (Windows; ?; WinNT4.0; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=WinNT
Win32=true

[Mozilla/5.0 (X11; *FreeBSD*; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=FreeBSD

[Mozilla/5.0 (X11; *Linux*; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=Linux

[Mozilla/5.0 (X11; *OpenBSD*; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=OpenBSD

[Mozilla/5.0 (X11; *SunOS*; *rv:1.9*) Gecko/*]
Parent=Mozilla 1.9
Platform=SunOS

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; IE Mac

[IE Mac]
Parent=DefaultProperties
Browser="IE"
Platform=MacPPC
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
JavaApplets=true
JavaScript=true
CSS=1
CssVersion=1
supportsCSS=true

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; AOL 9.0/IE 5.5

[AOL 9.0/IE 5.5]
Parent=DefaultProperties
Browser="AOL"
Version=5.5
MajorVer=5
MinorVer=5
Win32=true
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
CSS=2
CssVersion=2
supportsCSS=true
AOL=true
aolVersion=9.0

[Mozilla/?.* (?compatible; *MSIE 5.5; *AOL 9.0*)*]
Parent=AOL 9.0/IE 5.5

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Win 9x 4.90*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinME

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows 95*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win95

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows 98*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win98

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows 98*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows 98*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows 98*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows 98*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows 98; Win 9x 4.90*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinME

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows 98; Win 9x 4.90*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinME
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows 98; Win 9x 4.90*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows 98; Win 9x 4.90*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows 98; Win 9x 4.90*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 4.0*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinNT

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.0*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.0*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.0*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.0*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.0*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.01*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.01*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.01*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.01*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.01*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.1*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinXP

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.1*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinXP
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.1*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.1*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.2*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2003

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2003
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.2*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.2*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 5.2*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 6.0*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinVista

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 6.0*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinVista
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 6.0*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 6.0*.NET CLR 2*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *AOL 9.0; *Windows NT 6.0*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 5.5
Platform=WinVista
netCLR=true
ClrVersion=2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; AOL 9.0/IE 6.0

[AOL 9.0/IE 6.0]
Parent=DefaultProperties
Browser="AOL"
Version=6.0
MajorVer=6
Win32=true
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
CSS=2
CssVersion=2
supportsCSS=true
AOL=true
aolVersion=9.0

[Mozilla/?.* (?compatible; *MSIE 6.0; *AOL 9.0*)*]
Parent=AOL 9.0/IE 6.0

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Win 9x 4.90*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinME

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows 95*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win95

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows 98*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win98

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows 98*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows 98*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows 98*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows 98*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows 98; Win 9x 4.90*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinME

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows 98; Win 9x 4.90*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinME
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows 98; Win 9x 4.90*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows 98; Win 9x 4.90*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows 98; Win 9x 4.90*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 4.0*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinNT

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.0*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.0*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.0*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.0*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.0*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.01*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.01*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.01*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.01*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.01*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.1*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinXP

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.1*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinXP
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.1*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.1*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.2*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2003

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2003
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.2*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.2*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 5.2*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 6.0*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinVista

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 6.0*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinVista
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 6.0*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 6.0*.NET CLR 2*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *AOL 9.0; *Windows NT 6.0*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 6.0
Platform=WinVista
netCLR=true
ClrVersion=2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; AOL 9.0/IE 7.0

[AOL 9.0/IE 7.0]
Parent=DefaultProperties
Browser="AOL"
Version=7.0
MajorVer=7
Win32=true
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
CSS=2
CssVersion=2
supportsCSS=true
AOL=true
aolVersion=9.0

[Mozilla/?.* (?compatible; *MSIE 7.0; *AOL 9.0*)*]
Parent=AOL 9.0/IE 7.0

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Win 9x 4.90*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinME

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows 95*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win95

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows 98*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win98

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows 98*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows 98*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows 98*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows 98*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows 98; Win 9x 4.90*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinME

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows 98; Win 9x 4.90*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinME
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows 98; Win 9x 4.90*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows 98; Win 9x 4.90*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows 98; Win 9x 4.90*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 4.0*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinNT

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.0*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.0*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.0*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.0*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.0*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.01*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.01*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.01*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.01*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.01*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.1*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinXP

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.1*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinXP
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.1*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.1*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.2*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2003

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2003
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.2*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.2*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 5.2*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 6.0*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinVista

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 6.0*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinVista
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 6.0*.NET CLR 1*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 6.0*.NET CLR 2*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *AOL 9.0; *Windows NT 6.0*.NET CLR 2*.NET CLR 1*)*]
Parent=AOL 9.0/IE 7.0
Platform=WinVista
netCLR=true
ClrVersion=2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Avant Browser

[Avant Browser]
Parent=DefaultProperties
Browser="Avant Browser"
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
CSS=2
CssVersion=2
supportsCSS=true

[Advanced Browser (http://www.avantbrowser.com)]
Parent=Avant Browser

[Avant Browser*]
Parent=Avant Browser

[Avant Browser/*]
Parent=Avant Browser

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; IE 4.01

[IE 4.01]
Parent=DefaultProperties
Browser="IE"
Version=4.01
MajorVer=4
MinorVer=01
Win32=true
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (?compatible; *MSIE 4.01*)*]
Parent=IE 4.01

[Mozilla/4.0 (compatible; MSIE 4.01; *Windows 95*)*]
Parent=IE 4.01
Platform=Win95

[Mozilla/4.0 (compatible; MSIE 4.01; *Windows 98*)*]
Parent=IE 4.01
Platform=Win98

[Mozilla/4.0 (compatible; MSIE 4.01; *Windows NT 4.0*)*]
Parent=IE 4.01
Platform=WinNT

[Mozilla/4.0 (compatible; MSIE 4.01; *Windows NT 5.0*)*]
Parent=IE 4.01
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 4.01; *Windows NT 5.01*)*]
Parent=IE 4.01
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 5.0; *Windows 98; Win 9x 4.90;*)*]
Parent=IE 4.01
Platform=WinME

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; IE 5.0

[IE 5.0]
Parent=DefaultProperties
Browser="IE"
Version=5.0
MajorVer=5
Win32=true
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (?compatible; *MSIE 5.0*)*]
Parent=IE 5.0

[Mozilla/4.0 (compatible; MSIE 5.0; *Windows 95*)*]
Parent=IE 5.0
Platform=Win95

[Mozilla/4.0 (compatible; MSIE 5.0; *Windows 98*)*]
Parent=IE 5.0
Platform=Win98

[Mozilla/4.0 (compatible; MSIE 5.0; *Windows 98; Win 9x 4.90;*)*]
Parent=IE 5.0
Platform=WinME

[Mozilla/4.0 (compatible; MSIE 5.0; *Windows 98; Win 9x 4.90;*.NET CLR 1*)*]
Parent=IE 5.0
Platform=WinME
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.0; *Windows 98;*.NET CLR 1*)*]
Parent=IE 5.0
Platform=Win98
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.0; *Windows NT 4.0*)*]
Parent=IE 5.0
Platform=WinNT

[Mozilla/4.0 (compatible; MSIE 5.0; *Windows NT 4.0;*.NET CLR 1*)*]
Parent=IE 5.0
Platform=WinNT
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.0; *Windows NT 5.0*)*]
Parent=IE 5.0
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 5.0; *Windows NT 5.0;*.NET CLR 1*)*]
Parent=IE 5.0
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.0; *Windows NT 5.01*)*]
Parent=IE 5.0
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 5.0; *Windows NT 5.01;*.NET CLR 1*)*]
Parent=IE 5.0
Platform=Win2000
netCLR=true
ClrVersion=1

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; IE 5.01

[IE 5.01]
Parent=DefaultProperties
Browser="IE"
Version=5.01
MajorVer=5
MinorVer=01
Win32=true
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (?compatible; *MSIE 5.01*)*]
Parent=IE 5.01

[Mozilla/4.0 (compatible; MSIE 5.01; *Windows 95*)*]
Parent=IE 5.01
Platform=Win95

[Mozilla/4.0 (compatible; MSIE 5.01; *Windows 98*)*]
Parent=IE 5.01
Platform=Win98

[Mozilla/4.0 (compatible; MSIE 5.01; *Windows 98; Win 9x 4.90;*)*]
Parent=IE 5.01
Platform=WinME

[Mozilla/4.0 (compatible; MSIE 5.01; *Windows 98; Win 9x 4.90;*.NET CLR 1*)*]
Parent=IE 5.01
Platform=WinME
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.01; *Windows 98;*.NET CLR 1*)*]
Parent=IE 5.01
Platform=Win98
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.01; *Windows NT 4.0*)*]
Parent=IE 5.01
Platform=WinNT

[Mozilla/4.0 (compatible; MSIE 5.01; *Windows NT 4.0;*.NET CLR 1*)*]
Parent=IE 5.01
Platform=WinNT
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.01; *Windows NT 5.0*)*]
Parent=IE 5.01
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 5.01; *Windows NT 5.0;*.NET CLR 1*)*]
Parent=IE 5.01
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.01; *Windows NT 5.01*)*]
Parent=IE 5.01
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 5.01; *Windows NT 5.01;*.NET CLR 1*)*]
Parent=IE 5.01
Platform=Win2000
netCLR=true
ClrVersion=1

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; IE 5.5

[IE 5.5]
Parent=DefaultProperties
Browser="IE"
Version=5.5
MajorVer=5
MinorVer=5
Win32=true
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (?compatible; *MSIE 5.5*)*]
Parent=IE 5.5

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows 95*)*]
Parent=IE 5.5
Platform=Win95

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows 98*)*]
Parent=IE 5.5
Platform=Win98

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows 98; Win 9x 4.90*)*]
Parent=IE 5.5
Platform=WinME

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows 98; Win 9x 4.90;*.NET CLR 1*)*]
Parent=IE 5.5
Platform=WinME
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows 98; Win 9x 4.90;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 5.5
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows 98; Win 9x 4.90;*.NET CLR 2*)*]
Parent=IE 5.5
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows 98; Win 9x 4.90;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 5.5
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows 98;*.NET CLR 1*)*]
Parent=IE 5.5
Platform=Win98
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows 98;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 5.5
Platform=Win98
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows 98;*.NET CLR 2*)*]
Parent=IE 5.5
Platform=Win98
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows 98;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 5.5
Platform=Win98
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 4.0*)*]
Parent=IE 5.5
Platform=WinNT

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 4.0;*.NET CLR 1*)*]
Parent=IE 5.5
Platform=WinNT
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 4.0;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 5.5
Platform=WinNT
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 4.0;*.NET CLR 2*)*]
Parent=IE 5.5
Platform=WinNT
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 4.0;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 5.5
Platform=WinNT
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.0*)*]
Parent=IE 5.5
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.0;*.NET CLR 1*)*]
Parent=IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.0;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.0;*.NET CLR 2*)*]
Parent=IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.0;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.01*)*]
Parent=IE 5.5
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.01;*.NET CLR 1*)*]
Parent=IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.01;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.01;*.NET CLR 2*)*]
Parent=IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.01;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 5.5
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.1*)*]
Parent=IE 5.5
Platform=WinXP

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.1;*.NET CLR 1*)*]
Parent=IE 5.5
Platform=WinXP
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.1;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 5.5
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.1;*.NET CLR 2*)*]
Parent=IE 5.5
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.1;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 5.5
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.2*)*]
Parent=IE 5.5
Platform=Win2003

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.2;*.NET CLR 1*)*]
Parent=IE 5.5
Platform=Win2003
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.2;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 5.5
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.2;*.NET CLR 2*)*]
Parent=IE 5.5
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 5.5; *Windows NT 5.2;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 5.5
Platform=Win2003
netCLR=true
ClrVersion=2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; IE 6.0

[IE 6.0]
Parent=DefaultProperties
Browser="IE"
Version=6.0
MajorVer=6
Win32=true
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (?compatible; *MSIE 6.0*)*]
Parent=IE 6.0

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows 95*)*]
Parent=IE 6.0
Platform=Win95

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows 98*)*]
Parent=IE 6.0
Platform=Win98

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows 98; Win 9x 4.90*)*]
Parent=IE 6.0
Platform=WinME

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows 98; Win 9x 4.90;*.NET CLR 1*)*]
Parent=IE 6.0
Platform=WinME
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows 98; Win 9x 4.90;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 6.0
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows 98; Win 9x 4.90;*.NET CLR 2*)*]
Parent=IE 6.0
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows 98; Win 9x 4.90;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 6.0
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows 98;*.NET CLR 1*)*]
Parent=IE 6.0
Platform=Win98
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows 98;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 6.0
Platform=Win98
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows 98;*.NET CLR 2*)*]
Parent=IE 6.0
Platform=Win98
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows 98;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 6.0
Platform=Win98
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 4.0*)*]
Parent=IE 6.0
Platform=WinNT

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 4.0;*.NET CLR 1*)*]
Parent=IE 6.0
Platform=WinNT
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 4.0;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 6.0
Platform=WinNT
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 4.0;*.NET CLR 2*)*]
Parent=IE 6.0
Platform=WinNT
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 4.0;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 6.0
Platform=WinNT
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.0*)*]
Parent=IE 6.0
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.0;*.NET CLR 1*)*]
Parent=IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.0;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.0;*.NET CLR 2*)*]
Parent=IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.0;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.01*)*]
Parent=IE 6.0
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.01;*.NET CLR 1*)*]
Parent=IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.01;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.01;*.NET CLR 2*)*]
Parent=IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.01;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 6.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.1*)*]
Parent=IE 6.0
Platform=WinXP

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.1;*.NET CLR 1*)*]
Parent=IE 6.0
Platform=WinXP
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.1;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 6.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.1;*.NET CLR 2*)*]
Parent=IE 6.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.1;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 6.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2*)*]
Parent=IE 6.0
Platform=Win2003

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*.NET CLR 1*)*]
Parent=IE 6.0
Platform=Win2003
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 6.0
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*.NET CLR 2*)*]
Parent=IE 6.0
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 6.0
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*Win64;*)*]
Parent=IE 6.0
Platform=WinXP
Win32=false
Win64=true

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*Win64;*.NET CLR 1*)*]
Parent=IE 6.0
Platform=WinXP
Win32=false
Win64=true
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*Win64;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 6.0
Platform=WinXP
Win32=false
Win64=true
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*Win64;*.NET CLR 2*)*]
Parent=IE 6.0
Platform=WinXP
Win32=false
Win64=true
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*Win64;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 6.0
Platform=WinXP
Win32=false
Win64=true
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*WOW64;*)*]
Parent=IE 6.0
Platform=WinXP

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*WOW64;*.NET CLR 1*)*]
Parent=IE 6.0
Platform=WinXP
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*WOW64;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 6.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*WOW64;*.NET CLR 2*)*]
Parent=IE 6.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 5.2;*WOW64;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 6.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 6.0*)*]
Parent=IE 6.0
Platform=WinVista

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 6.0;*.NET CLR 1*)*]
Parent=IE 6.0
Platform=WinVista
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 6.0;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 6.0
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 6.0;*.NET CLR 2*)*]
Parent=IE 6.0
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 6.0; *Windows NT 6.0;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 6.0
Platform=WinVista
netCLR=true
ClrVersion=2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; IE 7.0

[IE 7.0]
Parent=DefaultProperties
Browser="IE"
Version=7.0
MajorVer=7
Win32=true
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (?compatible; *MSIE 7.0*)*]
Parent=IE 7.0

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows 98*)*]
Parent=IE 7.0
Platform=Win98

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows 98; Win 9x 4.90;*)*]
Parent=IE 7.0
Platform=WinME

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows 98; Win 9x 4.90;*.NET CLR 1*)*]
Parent=IE 7.0
Platform=WinME
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows 98; Win 9x 4.90;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows 98; Win 9x 4.90;*.NET CLR 2*)*]
Parent=IE 7.0
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows 98; Win 9x 4.90;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows 98;*.NET CLR 1*)*]
Parent=IE 7.0
Platform=Win98
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows 98;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0
Platform=Win98
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows 98;*.NET CLR 2*)*]
Parent=IE 7.0
Platform=Win98
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows 98;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0
Platform=Win98
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 4.0*)*]
Parent=IE 7.0
Platform=WinNT

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 4.0;*.NET CLR 1*)*]
Parent=IE 7.0
Platform=WinNT
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 4.0;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0
Platform=WinNT
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 4.0;*.NET CLR 2*)*]
Parent=IE 7.0
Platform=WinNT
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 4.0;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0
Platform=WinNT
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.0*)*]
Parent=IE 7.0
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.0;*.NET CLR 1*)*]
Parent=IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.0;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.0;*.NET CLR 2*)*]
Parent=IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.0;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.01*)*]
Parent=IE 7.0
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.01;*.NET CLR 1*)*]
Parent=IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.01;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.01;*.NET CLR 2*)*]
Parent=IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.01;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.1*)*]
Parent=IE 7.0
Platform=WinXP

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.1;*.NET CLR 1*)*]
Parent=IE 7.0
Platform=WinXP
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.1;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.1;*.NET CLR 2*)*]
Parent=IE 7.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.1;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2*)*]
Parent=IE 7.0
Platform=Win2003

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*.NET CLR 1*)*]
Parent=IE 7.0
Platform=Win2003
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*.NET CLR 2*)*]
Parent=IE 7.0
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*Win64;*)*]
Parent=IE 7.0
Platform=WinXP
Win32=false
Win64=true

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*Win64;*.NET CLR 1*)*]
Parent=IE 7.0
Platform=WinXP
Win32=false
Win64=true
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*Win64;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0
Platform=WinXP
Win32=false
Win64=true
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*Win64;*.NET CLR 2*)*]
Parent=IE 7.0
Platform=WinXP
Win32=false
Win64=true
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*Win64;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0
Platform=WinXP
Win32=false
Win64=true
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*WOW64;*)*]
Parent=IE 7.0
Platform=WinXP

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*WOW64;*.NET CLR 1*)*]
Parent=IE 7.0
Platform=WinXP
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*WOW64;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*WOW64;*.NET CLR 2*)*]
Parent=IE 7.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 5.2;*WOW64;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.0*)*]
Parent=IE 7.0
Platform=WinVista

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.0;*.NET CLR 1*)*]
Parent=IE 7.0
Platform=WinVista
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.0;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.0;*.NET CLR 2*)*]
Parent=IE 7.0
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.0;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0
Platform=WinVista
netCLR=true
ClrVersion=2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; IE 7.0b

[IE 7.0b]
Parent=DefaultProperties
Browser="IE"
Version=7.0b
MajorVer=7
MinorVer=0b
Beta=true
Win32=true
Frames=true
IFrames=true
Tables=true
Cookies=true
BackgroundSounds=true
CDF=true
VBScript=true
JavaApplets=true
JavaScript=true
ActiveXControls=true
CSS=2
CssVersion=2
supportsCSS=true

[Mozilla/?.* (?compatible; *MSIE 7.0b*)*]
Parent=IE 7.0b

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows 98*)*]
Parent=IE 7.0b
Platform=Win98

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows 98; Win 9x 4.90;*)*]
Parent=IE 7.0b
Platform=WinME

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows 98; Win 9x 4.90;*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=WinME
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows 98; Win 9x 4.90;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows 98; Win 9x 4.90;*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows 98; Win 9x 4.90;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=WinME
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows 98;*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=Win98
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows 98;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=Win98
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows 98;*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=Win98
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows 98;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=Win98
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 4.0*)*]
Parent=IE 7.0b
Platform=WinNT

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 4.0;*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=WinNT
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 4.0;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=WinNT
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 4.0;*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=WinNT
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 4.0;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=WinNT
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.0*)*]
Parent=IE 7.0b
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.0;*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.0;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.0;*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.0;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.01*)*]
Parent=IE 7.0b
Platform=Win2000

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.01;*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=Win2000
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.01;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.01;*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.01;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=Win2000
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.1*)*]
Parent=IE 7.0b
Platform=WinXP

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.1;*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=WinXP
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.1;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.1;*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.1;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2*)*]
Parent=IE 7.0b
Platform=Win2003

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=Win2003
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=Win2003
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*Win64;*)*]
Parent=IE 7.0b
Platform=WinXP
Win32=false
Win64=true

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*Win64;*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=WinXP
Win32=false
Win64=true
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*Win64;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=WinXP
Win32=false
Win64=true
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*Win64;*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=WinXP
Win32=false
Win64=true
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*Win64;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=WinXP
Win32=false
Win64=true
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*WOW64;*)*]
Parent=IE 7.0b
Platform=WinXP

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*WOW64;*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=WinXP
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*WOW64;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*WOW64;*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 5.2;*WOW64;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=WinXP
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 6.0*)*]
Parent=IE 7.0b
Platform=WinVista

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 6.0;*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=WinVista
netCLR=true
ClrVersion=1

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 6.0;*.NET CLR 1*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 6.0;*.NET CLR 2*)*]
Parent=IE 7.0b
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/4.0 (compatible; MSIE 7.0b; *Windows NT 6.0;*.NET CLR 2*.NET CLR 1*)*]
Parent=IE 7.0b
Platform=WinVista
netCLR=true
ClrVersion=2

[Mozilla/?.? (compatible; MSIE 4.0*; *Mac_PowerPC*]
Parent=IE Mac
Version=4.0
MajorVer=4
MinorVer=0

[Mozilla/?.? (compatible; MSIE 4.5*; *Mac_PowerPC*]
Parent=IE Mac
Version=4.5
MajorVer=4
MinorVer=5

[Mozilla/?.? (compatible; MSIE 5.0*; *Mac_PowerPC*]
Parent=IE Mac
Version=5.0
MajorVer=5
MinorVer=0

[Mozilla/?.? (compatible; MSIE 5.1*; *Mac_PowerPC*]
Parent=IE Mac
Version=5.1
MajorVer=5
MinorVer=1

[Mozilla/?.? (compatible; MSIE 5.2*; *Mac_PowerPC*]
Parent=IE Mac
Version=5.2
MajorVer=5
MinorVer=2

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Default Browser

[*]
Browser="Default Browser"
Version=0
MajorVer=0
MinorVer=0
Platform=unknown
Alpha=false
Beta=false
Win16=false
Win32=false
Win64=false
Frames=true
IFrames=false
Tables=true
Cookies=false
BackgroundSounds=false
AuthenticodeUpdate=0
CDF=false
VBScript=false
JavaApplets=false
JavaScript=false
ActiveXControls=false
Stripper=false
isBanned=false
WAP=false
isMobileDevice=false
isSyndicationReader=false
Crawler=false
CSS=0
CssVersion=0
supportsCSS=false
AOL=false
aolVersion=0
netCLR=false
ClrVersion=0
