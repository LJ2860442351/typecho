<?php if($this->options->RewardOpen == '1' && $this->options->Reward_style == '1'): ?>
 <div id="donate" style="margin-top:30px"><link rel="stylesheet" type="text/css" href="<?php AssetsDir2();?>assets/css/donate.css"><script type="text/javascript" src="<?php AssetsDir();?>assets/javascript/donate.js" successtext="复制成功!"></script><div id="DonateText">打赏一下</div><ul class="list pos-f" id="donateBox"><?php if($this->options->RewardOpenPaypal == '1'): ?><li id="PayPal"><a href="<?php $this->options->RewardOpenPaypalText() ?>" target="_blank"></a></li><?php endif;?><?php if($this->options->RewardOpenAlipay == '1'): ?><li id="AliPay" qr="<?php $this->options->RewardOpenAlipayText() ?>"></li><?php endif;?><?php if($this->options->RewardOpenWechat == '1'): ?><li id="WeChat" qr="<?php $this->options->RewardOpenWechatText() ?>"></li><?php endif;?></ul><div class="pos-f left-100" id="QRBox"><div id="MainBox"></div>
</div>
</div><?php endif;?>
<?php if($this->options->RewardOpen == '1' && $this->options->Reward_style == '2'): ?>
<div style="text-align:center;margin-top:30px">
<div class="ui compact menu">
<?php if($this->options->RewardOpenPaypal == '1'): ?>
  <a class="item" href="<?php $this->options->RewardOpenPaypalText() ?>">
    <svg t="1635476386825" class="icon" viewBox="0 0 4220 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2444" width="56" height="56"><path d="M3249.722604 229.409369h-232.537679c-15.641548 0-29.197556 11.470468-32.325865 27.112016l-93.849287 595.421589c-2.08554 11.470468 7.299389 21.898167 18.769857 21.898167h118.875764c11.470468 0 20.855397-8.342159 21.898167-18.769858l27.112016-168.928717c2.08554-15.641548 15.641548-27.112016 32.325866-27.112016h72.99389c153.287169 0 240.879837-74.03666 263.820774-221.06721 10.427699-63.608961 0-114.704684-29.197556-150.158859-31.283096-38.582485-89.678208-58.395112-167.885947-58.395112z m27.112016 216.89613c-12.513238 83.421589-76.1222 83.421589-137.645621 83.421589h-35.454175l25.026476-155.372709c1.04277-9.384929 9.384929-16.684318 18.769858-16.684318h15.641547c41.710794 0 81.336049 0 102.191447 23.983707 12.513238 14.598778 15.641548 35.454175 11.470468 64.651731z" fill="#009CDE" p-id="2445"></path><path d="M1594.84684 229.409369h-232.537678c-15.641548 0-29.197556 11.470468-32.325866 27.112016l-93.849287 595.421589c-2.08554 11.470468 7.299389 21.898167 18.769857 21.898167h110.533605c15.641548 0 29.197556-11.470468 32.325866-27.112017l25.026476-160.586558c2.08554-15.641548 15.641548-27.112016 32.325866-27.112016h72.99389c153.287169 0 240.879837-74.03666 263.820774-221.06721 10.427699-63.608961 0-114.704684-29.197556-150.158859-31.283096-38.582485-89.678208-58.395112-167.885947-58.395112z m27.112016 216.89613c-12.513238 83.421589-76.1222 83.421589-137.645621 83.421589h-35.454175l25.026476-155.372709c1.04277-9.384929 9.384929-16.684318 18.769858-16.684318h15.641548c41.710794 0 81.336049 0 102.191446 23.983707 12.513238 14.598778 15.641548 35.454175 11.470468 64.651731zM2288.288795 443.177189h-111.576375c-9.384929 0-17.727088 7.299389-18.769857 16.684318l-5.213849 31.283096-7.299389-11.470469c-23.983707-34.411405-77.164969-46.924644-131.389002-46.924643-123.046843 0-227.323829 92.806517-248.179226 223.152749-10.427699 64.651731 4.171079 127.217923 41.710794 171.014257 34.411405 39.625255 82.378819 56.309572 139.731161 56.309572 99.063136 0 153.287169-63.608961 153.287169-63.608961l-5.21385 31.283096c-2.08554 11.470468 7.299389 21.898167 18.769858 21.898167h100.105906c15.641548 0 29.197556-11.470468 32.325866-27.112017l60.480652-380.610998c2.08554-10.427699-6.256619-21.898167-18.769858-21.898167z m-154.329939 216.896131c-10.427699 63.608961-61.523422 106.362525-125.132383 106.362525-32.325866 0-58.395112-10.427699-75.079429-30.240326-16.684318-19.812627-22.940937-46.924644-17.727088-78.207739 10.427699-62.566191 61.523422-107.405295 124.089613-107.405295 31.283096 0 57.352342 10.427699 74.03666 30.240326 17.727088 20.855397 25.026477 47.967413 19.812627 79.250509z" fill="#003087" p-id="2446"></path><path d="M3943.164559 443.177189h-111.576375c-9.384929 0-17.727088 7.299389-18.769857 16.684318l-5.21385 31.283096-7.299389-11.470469c-23.983707-34.411405-77.164969-46.924644-131.389002-46.924643-123.046843 0-227.323829 92.806517-248.179226 223.152749-10.427699 64.651731 4.171079 127.217923 41.710795 171.014257 34.411405 39.625255 82.378819 56.309572 139.73116 56.309572 99.063136 0 153.287169-63.608961 153.28717-63.608961l-5.21385 31.283096c-2.08554 11.470468 7.299389 21.898167 18.769858 21.898167h100.105906c15.641548 0 29.197556-11.470468 32.325866-27.112017l60.480651-380.610998c2.08554-10.427699-6.256619-21.898167-18.769857-21.898167z m-154.329939 216.896131c-10.427699 63.608961-61.523422 106.362525-125.132383 106.362525-32.325866 0-58.395112-10.427699-75.07943-30.240326-16.684318-19.812627-22.940937-46.924644-17.727087-78.207739 10.427699-62.566191 61.523422-107.405295 124.089613-107.405295 31.283096 0 57.352342 10.427699 74.03666 30.240326 17.727088 20.855397 25.026477 47.967413 19.812627 79.250509z" fill="#009CDE" p-id="2447"></path><path d="M2880.582074 443.177189h-111.576375c-10.427699 0-20.855397 5.213849-27.112016 14.598778l-154.329939 227.323829-65.694501-217.9389c-4.171079-13.556008-16.684318-22.940937-31.283096-22.940937h-109.490835c-13.556008 0-22.940937 13.556008-18.769857 26.069247l123.046843 360.79837-115.747454 162.672098c-9.384929 12.513238 0 30.240326 15.641548 30.240326h111.576375c10.427699 0 20.855397-5.213849 26.069246-13.556008l371.226069-535.983707c11.470468-13.556008 2.08554-31.283096-13.556008-31.283096z" fill="#003087" p-id="2448"></path><path d="M4074.553561 245.050916l-94.892057 605.849288c-2.08554 11.470468 7.299389 21.898167 18.769857 21.898167h95.934827c15.641548 0 29.197556-11.470468 32.325866-27.112017l93.849287-595.421588c2.08554-11.470468-7.299389-21.898167-18.769857-21.898167h-107.405296c-10.427699 1.04277-18.769857 7.299389-19.812627 16.684317z" fill="#009CDE" p-id="2449"></path><path d="M782.529121 259.649695c12.513238-79.250509 0-133.474542-42.753564-182.484726C691.808143 22.940937 606.301015 0 496.81018 0H178.765374c-21.898167 0-41.710794 16.684318-44.839104 38.582485L0.451728 879.05499c-3.12831 16.684318 10.427699 31.283096 27.112016 31.283096h196.040733l-13.556008 85.507128c-2.08554 14.598778 9.384929 27.112016 23.983707 27.112016h165.800407c19.812627 0 36.496945-14.598778 39.625255-33.368635l2.08554-8.342159 31.283095-198.126273 2.08554-10.427699c3.12831-19.812627 19.812627-33.368635 39.625255-33.368635h25.026476c160.586558 0 285.718941-64.651731 322.215886-253.393075 15.641548-79.250509 7.299389-144.94501-33.368635-190.826884-12.513238-13.556008-28.154786-26.069246-45.881874-35.454175" fill="#009CDE" p-id="2450"></path><path d="M782.529121 259.649695c12.513238-79.250509 0-133.474542-42.753564-182.484726C691.808143 22.940937 606.301015 0 496.81018 0H178.765374c-21.898167 0-41.710794 16.684318-44.839104 38.582485L0.451728 879.05499c-3.12831 16.684318 10.427699 31.283096 27.112016 31.283096h196.040733l49.010184-312.830958-1.04277 9.384929c3.12831-21.898167 21.898167-38.582485 44.839104-38.582485h93.849287c183.527495 0 327.429735-74.03666 369.140529-289.89002l3.12831-18.769857" fill="#012169" p-id="2451"></path><path d="M326.838693 260.692464c2.08554-13.556008 10.427699-23.983707 21.898167-30.240326 5.213849-2.08554 11.470468-4.171079 16.684318-4.171079h250.264766c29.197556 0 57.352342 2.08554 82.378819 6.256619 7.299389 1.04277 14.598778 2.08554 20.855397 4.17108 7.299389 1.04277 13.556008 3.12831 19.812627 5.213849l9.384929 3.128309c12.513238 4.171079 23.983707 9.384929 34.411405 14.598779 12.513238-79.250509 0-133.474542-42.753564-182.484726C691.808143 22.940937 606.301015 0 496.81018 0H178.765374c-21.898167 0-41.710794 16.684318-44.839104 38.582485L0.451728 879.05499c-3.12831 16.684318 10.427699 31.283096 27.112016 31.283096h196.040733l49.010184-312.830958L326.838693 260.692464z" fill="#003087" p-id="2452"></path></svg>
  </a>
  <?php endif;?>
  <?php if($this->options->RewardOpenAlipay == '1'): ?>
  <a class="item" id="bs-alipay">
    <svg t="1635476538626" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4708" data-spm-anchor-id="a313x.7781069.0.i9" width="56" height="56"><path d="M325.010235 521.640568c45.724391 15.264659 56.096622 16.089443 56.096622 16.089443L381.106858 373.562021c0-28.02017-22.748097-50.725288-50.845015-50.725288L114.451682 322.836733c-28.105105 0-50.862411 22.705118-50.862411 50.725288l0 215.173664c0 28.002774 22.756283 50.711985 50.862411 50.711985l215.810161 0c28.095895 0 50.845015-22.709211 50.845015-50.711985l0-2.079358c0 0-82.588997-34.326806-124.296911-54.324256-27.966958 34.31862-64.050782 55.141878-101.506858 55.141878-63.352887 0-84.866876-55.277978-54.866608-91.668793 6.537903-7.933693 17.663288-15.508205 34.933627-19.753903 27.006074-6.614651 70.003354 4.128017 110.291942 17.388019 7.239891-13.314237 13.338796-27.973098 17.887392-43.578518L139.377374 449.860754 139.377374 437.312974l64.022129 0 0-22.481014-77.54205 0 0-12.541641 77.54205 0 0-32.075533c0 0 0-5.40101 5.492084-5.40101l31.292704 0 0 37.476543 76.6661 0 0 12.541641-76.6661 0 0 22.481014 62.582337 0c-5.987365 24.461111-15.089673 46.976918-26.498514 66.745147C295.257607 510.908132 312.309982 517.396917 325.010235 521.640568z" p-id="4709" data-spm-anchor-id="a313x.7781069.0.i10" class="" fill="#0baef3"></path><path d="M140.764977 494.824829c-7.933693 0.788969-22.823821 4.2897-30.969339 11.462053-24.410969 21.223371-9.806343 60.025095 39.590694 60.025095 28.708855 0 57.406454-18.307971 79.94068-47.613414C197.267852 503.094166 170.110329 491.933989 140.764977 494.824829z" p-id="4710" data-spm-anchor-id="a313x.7781069.0.i15" class="" fill="#0baef3"></path><path d="M833.04083 372.470153l90.892103 0 0 17.995863 32.459273 0 0-17.995863 0-3.321652c-0.002047-0.050142-0.00921-0.072655-0.00921-0.128937 0-4.79112-3.752464-8.670473-8.40646-8.749268l-52.535517 0 0-16.770965-33.972742 0 0 16.770965-60.884672 0 0 6.102998 0 6.097882 0 17.995863 32.457226 0L833.04083 372.470153z" p-id="4711"></path><path d="M636.395148 345.045547 603.115184 423.75826 628.64872 423.75826 628.64872 517.420453 656.565537 517.420453 656.565537 393.183917 646.452201 393.183917 667.479097 345.045547Z" p-id="4712"></path><path d="M960.124204 513.128707l-10.201339-34.450626c-0.677429-2.199085-2.667759-3.791349-5.034666-3.793396l-27.025517 0 7.835456 26.460652-31.776727 0L893.921409 450.094068l62.400189 0 0-12.202926-62.400189 0 0-24.12035 62.400189 0 0-12.20088-62.400189 0-30.937616 0-62.400189 0 0 12.20088 62.400189 0 0 24.12035-62.400189 0 0 12.202926 62.400189 0 0 51.250244-62.400189 0 0 12.199856 159.540599 0-0.135076-0.415462L960.124204 513.128707z" p-id="4713"></path><path d="M707.794291 409.568073c-1.056052-2.163269-3.225461-3.653203-5.741771-3.673669l-24.170492 0 18.823718 59.291384 28.597315 0L707.794291 409.568073z" p-id="4714"></path><path d="M768.977769 346.476129l-29.014824 0 0 30.319539-71.510684 0 0 12.20088 71.510684 0 0 108.995413c-0.248663 2.488681-2.219551 4.429893-4.681626 4.564969L720.534454 502.55693l0 12.634762 37.60241 0c5.952572-0.251733 10.708899-5.183046 10.839883-11.31265l0-1.322112L768.976746 388.996548l11.781324 0 0-12.20088L768.977769 376.795669 768.977769 346.476129z" p-id="4715"></path><path d="M587.931367 401.710105l-55.737442 0 0-19.970844 64.62895 0 0-12.441357-64.62895 0L532.193925 343.987449l-28.809139 0-0.00307 0.005117c-3.154853 0-5.712095 2.642177-5.712095 5.90857l0 0.00614 0 19.389606-64.169485 0 0 12.441357 64.169485 0 0 19.970844-54.157457 0 0 12.43317 107.884103 0c0 0-5.979178 23.340591-35.571147 48.424896-26.51284-20.068058-35.373649-36.057217-35.373649-36.057217l-28.941146 0c11.7056 20.293185 28.345582 36.546358 46.261627 49.436946-16.458857 10.69662-37.799908 21.00643-65.399499 29.254278l0 14.902408c0 0 42.577724-8.035 83.72896-32.281217 41.21468 24.055882 82.608439 32.281217 82.608439 32.281217l0-14.101159c-26.492374-9.646708-47.478338-20.250206-63.959707-30.480198C558.62183 457.833333 579.545372 433.82657 587.931367 401.710105z" p-id="4716"></path><path d="M496.459049 600.61627l4.816702 14.547321 13.508665 0-26.606984-72.235185-10.324136 0-26.50977 72.235185 13.517875 0 5.027503-14.547321L496.459049 600.61627zM483.392452 561.550533l9.992585 29.959336-20.346397 0L483.392452 561.550533z" p-id="4717"></path><path d="M557.410236 542.928407 557.410236 615.163591 601.152483 615.163591 601.152483 605.329619 570.408271 605.329619 570.408271 542.928407Z" p-id="4718"></path><path d="M648.811946 542.928407l13.002129 0 0 72.235185-13.002129 0 0-72.235185Z" p-id="4719"></path><path d="M742.56112 542.928407l-28.078499 0 0 72.235185 12.997012 0 0-27.768437 15.081487 0c14.009062 0 23.793916-9.145287 23.793916-22.23542C766.356059 552.068578 756.571205 542.928407 742.56112 542.928407zM741.827409 577.467037l-14.347776 0 0-24.715915 14.347776 0c7.216355 0 11.523451 6.306636 11.523451 12.408611C753.351883 571.124586 749.313917 577.467037 741.827409 577.467037z" p-id="4720"></path><path d="M842.664002 600.61627l4.819772 14.547321 13.505595 0-26.606984-72.235185-10.324136 0-26.50977 72.235185 13.519921 0 5.025457-14.547321L842.664002 600.61627zM829.594335 561.550533l9.995655 29.959336-20.349467 0L829.594335 561.550533z" p-id="4721"></path><path d="M933.367817 542.928407 919.194002 573.705364 904.805294 542.928407 890.763486 542.928407 912.63768 585.486688 912.63768 615.163591 925.533384 615.163591 925.533384 585.486688 925.618319 585.325006 947.410648 542.928407Z" p-id="4722"></path></svg>
  </a>
  <?php endif;?>
  <?php if($this->options->RewardOpenWechat == '1'): ?>
  <a class="item" id="bs-wechat">
    <svg t="1635476636644" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6523" width="40" height="40"><path d="M395.846 603.585c-3.921 1.98-7.936 2.925-12.81 2.925-10.9 0-19.791-5.85-24.764-14.625l-2.006-3.864-78.106-167.913c-0.956-1.98-0.956-3.865-0.956-5.845 0-7.83 5.928-13.68 13.863-13.68 2.965 0 5.928 0.944 8.893 2.924l91.965 64.43c6.884 3.864 14.82 6.79 23.708 6.79 4.972 0 9.85-0.945 14.822-2.926L861.71 282.479c-77.149-89.804-204.684-148.384-349.135-148.384-235.371 0-427.242 157.158-427.242 351.294 0 105.368 57.361 201.017 147.323 265.447 6.88 4.905 11.852 13.68 11.852 22.45 0 2.925-0.957 5.85-2.006 8.775-6.881 26.318-18.831 69.334-18.831 71.223-0.958 2.92-2.013 6.79-2.013 10.75 0 7.83 5.929 13.68 13.865 13.68 2.963 0 5.928-0.944 7.935-2.925l92.922-53.674c6.885-3.87 14.82-6.794 22.756-6.794 3.916 0 8.889 0.944 12.81 1.98 43.496 12.644 91.012 19.53 139.48 19.53 235.372 0 427.24-157.158 427.24-351.294 0-58.58-17.78-114.143-48.467-163.003l-491.39 280.07-2.963 1.98z" fill="#09BB07" p-id="6524"></path></svg>
  </a>
  <?php endif;?>
</div>
</div>
<?php endif; ?>
<?php if($this->options->RewardOpen == '1' && $this->options->Reward_style == '3'): ?>
<div style="text-align:center;margin-top:30px">
<div class="ui large buttons">
    <?php if($this->options->RewardOpenPaypal == '1'): ?>
  <a href="<?php $this->options->RewardOpenPaypalText() ?>" class="ui button"><i class="paypal icon"></i>贝宝</a>
  <?php if($this->options->RewardOpenWechat == '1' || $this->options->RewardOpenAlipay == '1'): ?><div class="or"></div><?php endif; ?>
  <?php endif; ?>
  
  <?php if($this->options->RewardOpenAlipay == '1'): ?>
  <button id="bs-alipay" class="ui button"><i class="reddit alien icon"></i>支付宝</button>
  <?php if($this->options->RewardOpenWechat == '1'): ?><div class="or"></div><?php endif; ?>
  <?php endif; ?>

  <?php if($this->options->RewardOpenWechat == '1'): ?>
  <button id="bs-wechat" class="ui button"><i class="wechat icon"></i>微信</button>
  <?php endif; ?>
</div></div>
<?php endif; ?>