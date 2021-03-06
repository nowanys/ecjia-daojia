<?php
/*
Name: 推广中心模板
Description: 这是用户推广中心
Libraries: page_menu,page_header
*/
defined('IN_ECJIA') or header("HTTP/1.0 404 Not Found");exit('404 Not Found');
?>
<!-- {nocache} -->
<!-- {extends file="ecjia-touch.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
ecjia.touch.spread.init();
</script>
<!-- {/block} -->

<!-- {block name="main-content"} -->
<div class="ecjia-spread-center">
    <div class="ecjia-spread-background"></div>
    <div class="spread-container">
        <div class="user-info">
            <div class="user-info-top">
                <img src="{$user_img}" />
                <div class="top-right">
                    <div class="name">{$user.name}</div>
                    <div class="rank">{$user.rank_name}</div>
                </div>
            </div>
            <div class="user-info-bottom">
                <div class="bottom-top">
                    <div class="top-left">
                        <div class="title">可提现金额（元）</div>
                        <div class="price">{$user.user_money}</div>
                    </div>
                    <div class="top-right">
                        <a href="{url path='user/account/withdraw'}">去提现</a>
                    </div>
                </div>
                <div class="bottom-bottom">
                    <div class="bottom-item">
                        <p>今日收入(元)</p>
                        <span>{if $user_info.affiliate_summary.today_affiliate_amount}{$user_info.affiliate_summary.today_affiliate_amount}{else}0{/if}</span>
                        <span class="bottom-border"></span>
                    </div>
                    <div class="bottom-item">
                        <p>待分成(元)</p>
                        <span>{if $user_info.affiliate_summary.await_affiliate_amount}{$user_info.affiliate_summary.await_affiliate_amount}{else}0{/if}</span>
                        <span class="bottom-border"></span>
                    </div>
                    <div class="bottom-item">
                        <p>累计收入(元)</p>
                        <span>{if $user_info.affiliate_summary.total_affiliate_amount}{$user_info.affiliate_summary.total_affiliate_amount}{else}0{/if}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="spread-info">
            <a href="{url path='user/personal/reward'}">
                <div class="info-item">
                    <img src="{$theme_url}images/spread/sales_award.png" />
                    <div class="title">销售奖励</div>
                </div>
            </a>
            <a href="{url path='user/store/reward'}">
                <div class="info-item">
                    <img src="{$theme_url}images/spread/store_award.png" />
                    <div class="title">推广店铺</div>
                </div>
            </a>

            {if $user_info.affiliate_agent_level eq 'level1'}
            <a href="{url path='user/team/list'}">
                <div class="info-item">
                    <img src="{$theme_url}images/spread/my_team.png" />
                    <div class="title">我的团队</div>
                </div>
            </a>
            {/if}

            <div class="clearfix"></div>
            <div class="ecjia-user">
                <ul class="ecjia-list list-short">
                    <li>
                        <a class="nopjax external" href="{url path='touch/index/init'}">
                            <span class="icon-name">邀请好友下单</span>
                            <i class="iconfont icon-jiantou-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- {/block} -->
<!-- {/nocache} -->