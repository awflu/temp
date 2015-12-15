<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cm_crm_user_info{
	protected $nick;//昵称
	protected $data_type;//ID
	protected $first_trade;//首笔订单信息
	protected $first_success_trade;//首笔成功订单信息
	protected $last_trade;//最后订单信息
	protected $last_success_trade;//最后成功订单信息
	protected $trade_count;//订单数;
	protected $trade_amount;//订单总金额;
	protected $success_trade_count;//成功订单数;
	protected $success_trade_amount;//成功订单金额;
	protected $success_trade_avg_price;//成功订单平均客单价;
	
	public function __construct()
	{
		$this->first_trade=array			//首次下单
		(
		'tid'=>null,		//订单编号
		'created'->null		//订单时间
		);
		
		$this->first_success_trade=array	//首次成功订单
		(
		'tid'=>null,		//订单编号
		'created'->null,	//订单时间
		'end_time'->null,	//成功时间
		'from'->null,		//来源
		'payment'->null,	//金额	
		);
		
		$this->last_trade=array
		(
		'tid'=>null,		//订单编号
		'created'->null		//订单时间
		);
		
		$this->last_success_trade=array
		(
		'tid'=>null,		//订单编号
		'created'->null,	//订单时间
		'end_time'->null,	//成功时间
		);
		
		$this->trade_count=0;
		$this->trade_amount=0;
		$this->success_trade_count=0;
		$this->success_trade_amount=0;
		$this->success_trade_avg_price=0;	

	}
	

	
	public function set_value


	
	
	
	
	
	
}

							
				
