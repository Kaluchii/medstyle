// Garden Gnome Software - Skin
// Pano2VR 5.0.1/15068
// Filename: vitaliy.ggsk
// Generated Сб июл 15 18:34:22 2017

function pano2vrSkin(player,base) {
	var ggSkinVars = [];
	var me=this;
	var flag=false;
	this.player=player;
	this.player.skinObj=this;
	this.divSkin=player.divSkin;
	this.ggUserdata=me.player.userdata;
	this.lastSize={ w: -1,h: -1 };
	var basePath="";
	// auto detect base path
	if (base=='?') {
		var scripts = document.getElementsByTagName('script');
		for(var i=0;i<scripts.length;i++) {
			var src=scripts[i].src;
			if (src.indexOf('skin.js')>=0) {
				var p=src.lastIndexOf('/');
				if (p>=0) {
					basePath=src.substr(0,p+1);
				}
			}
		}
	} else
	if (base) {
		basePath=base;
	}
	this.elementMouseDown=[];
	this.elementMouseOver=[];
	var cssPrefix='';
	var domTransition='transition';
	var domTransform='transform';
	var prefixes='Webkit,Moz,O,ms,Ms'.split(',');
	var i;
	if (typeof document.body.style['transform'] == 'undefined') {
		for(var i=0;i<prefixes.length;i++) {
			if (typeof document.body.style[prefixes[i] + 'Transform'] !== 'undefined') {
				cssPrefix='-' + prefixes[i].toLowerCase() + '-';
				domTransition=prefixes[i] + 'Transition';
				domTransform=prefixes[i] + 'Transform';
			}
		}
	}
	
	this.player.setMargins(0,0,0,0);
	
	this.updateSize=function(startElement) {
		var stack=[];
		stack.push(startElement);
		while(stack.length>0) {
			var e=stack.pop();
			if (e.ggUpdatePosition) {
				e.ggUpdatePosition();
			}
			if (e.hasChildNodes()) {
				for(var i=0;i<e.childNodes.length;i++) {
					stack.push(e.childNodes[i]);
				}
			}
		}
	}
	
	parameterToTransform=function(p) {
		var hs='translate(' + p.rx + 'px,' + p.ry + 'px) rotate(' + p.a + 'deg) scale(' + p.sx + ',' + p.sy + ')';
		return hs;
	}
	
	this.findElements=function(id,regex) {
		var r=[];
		var stack=[];
		var pat=new RegExp(id,'');
		stack.push(me.divSkin);
		while(stack.length>0) {
			var e=stack.pop();
			if (regex) {
				if (pat.test(e.ggId)) r.push(e);
			} else {
				if (e.ggId==id) r.push(e);
			}
			if (e.hasChildNodes()) {
				for(var i=0;i<e.childNodes.length;i++) {
					stack.push(e.childNodes[i]);
				}
			}
		}
		return r;
	}
	
	this.addSkin=function() {
		var hs='';
		this.ggCurrentTime=new Date().getTime();
		this._controller=document.createElement('div');
		this._controller.ggId="controller";
		this._controller.ggLeft=-141;
		this._controller.ggTop=-147;
		this._controller.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._controller.ggVisible=true;
		this._controller.className='ggskin ggskin_container ';
		this._controller.ggType='container';
		hs ='';
		hs+='height : 50px;';
		hs+='left : -141px;';
		hs+='position : absolute;';
		hs+='top : -147px;';
		hs+='visibility : inherit;';
		hs+='width : 286px;';
		this._controller.setAttribute('style',hs);
		this._controller.style[domTransform + 'Origin']='50% 50%';
		me._controller.ggIsActive=function() {
			return false;
		}
		me._controller.ggElementNodeId=function() {
			return me.player.getCurrentNode();
		}
		me._controller.ggCurrentLogicStatePosition = -1;
		this._controller.ggUpdateConditionTimer=function () {
			var newLogicStatePosition;
			if (
				(me.player.getViewerSize().width <= 1024) || 
				(me.player.getIsMobile() == true)
			)
			{
				newLogicStatePosition = 0;
			}
			else {
				newLogicStatePosition = -1;
			}
			if (me._controller.ggCurrentLogicStatePosition != newLogicStatePosition) {
				me._controller.ggCurrentLogicStatePosition = newLogicStatePosition;
				me._controller.style[domTransition]='left none, top none';
				if (me._controller.ggCurrentLogicStatePosition == 0) {
					me._controller.ggLeft=-166;
					me._controller.ggTop=-65;
					me._controller.ggUpdatePosition();
				}
				else {
					me._controller.ggLeft=-141;
					me._controller.ggTop=-147;
					me._controller.ggUpdatePosition();
				}
			}
		}
		this._controller.ggUpdatePosition=function () {
			this.style[domTransition]='none';
			if (this.parentNode) {
				var w=this.parentNode.offsetWidth;
					this.style.left=(this.ggLeft - 0 + w/2) + 'px';
				var h=this.parentNode.offsetHeight;
					this.style.top=(this.ggTop - 0 + h) + 'px';
			}
		}
		this._up=document.createElement('div');
		this._up__img=document.createElement('img');
		this._up__img.className='ggskin ggskin_svg';
		this._up__img.setAttribute('src',basePath + 'images/up.svg');
		this._up__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._up__img['ondragstart']=function() { return false; };
		this._up.appendChild(this._up__img);
		this._up__imgo=document.createElement('img');
		this._up__imgo.className='ggskin ggskin_svg';
		this._up__imgo.setAttribute('src',basePath + 'images/up__o.svg');
		this._up__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._up__imgo['ondragstart']=function() { return false; };
		this._up.appendChild(this._up__imgo);
		this._up.ggId="up";
		this._up.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._up.ggVisible=true;
		this._up.className='ggskin ggskin_svg ';
		this._up.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : 25px;';
		hs+='position : absolute;';
		hs+='top : -5px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._up.setAttribute('style',hs);
		this._up.style[domTransform + 'Origin']='50% 50%';
		me._up.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._up.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._up.onmouseover=function () {
			me._up__img.style.visibility='hidden';
			me._up__imgo.style.visibility='inherit';
		}
		this._up.onmouseout=function () {
			me._up__img.style.visibility='inherit';
			me._up__imgo.style.visibility='hidden';
			me.elementMouseDown['up']=false;
		}
		this._up.onmousedown=function () {
			me.elementMouseDown['up']=true;
		}
		this._up.onmouseup=function () {
			me.elementMouseDown['up']=false;
		}
		this._up.ontouchend=function () {
			me.elementMouseDown['up']=false;
		}
		me._up.ggCurrentLogicStateVisible = -1;
		this._up.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.player.getViewerSize().width <= 1024) || 
				(me.player.getIsMobile() == true)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._up.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._up.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._up.style[domTransition]='';
				if (me._up.ggCurrentLogicStateVisible == 0) {
					me._up.style.visibility="hidden";
					me._up.ggVisible=false;
				}
				else {
					me._up.style.visibility=(Number(me._up.style.opacity)>0||!me._up.style.opacity)?'inherit':'hidden';
					me._up.ggVisible=true;
				}
			}
		}
		this._up.ggUpdatePosition=function () {
		}
		this._controller.appendChild(this._up);
		this._down=document.createElement('div');
		this._down__img=document.createElement('img');
		this._down__img.className='ggskin ggskin_svg';
		this._down__img.setAttribute('src',basePath + 'images/down.svg');
		this._down__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._down__img['ondragstart']=function() { return false; };
		this._down.appendChild(this._down__img);
		this._down__imgo=document.createElement('img');
		this._down__imgo.className='ggskin ggskin_svg';
		this._down__imgo.setAttribute('src',basePath + 'images/down__o.svg');
		this._down__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._down__imgo['ondragstart']=function() { return false; };
		this._down.appendChild(this._down__imgo);
		this._down.ggId="down";
		this._down.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._down.ggVisible=true;
		this._down.className='ggskin ggskin_svg ';
		this._down.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : 25px;';
		hs+='position : absolute;';
		hs+='top : 25px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._down.setAttribute('style',hs);
		this._down.style[domTransform + 'Origin']='50% 50%';
		me._down.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._down.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._down.onmouseover=function () {
			me._down__img.style.visibility='hidden';
			me._down__imgo.style.visibility='inherit';
		}
		this._down.onmouseout=function () {
			me._down__img.style.visibility='inherit';
			me._down__imgo.style.visibility='hidden';
			me.elementMouseDown['down']=false;
		}
		this._down.onmousedown=function () {
			me.elementMouseDown['down']=true;
		}
		this._down.onmouseup=function () {
			me.elementMouseDown['down']=false;
		}
		this._down.ontouchend=function () {
			me.elementMouseDown['down']=false;
		}
		me._down.ggCurrentLogicStateVisible = -1;
		this._down.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.player.getViewerSize().width <= 1024) || 
				(me.player.getIsMobile() == true)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._down.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._down.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._down.style[domTransition]='';
				if (me._down.ggCurrentLogicStateVisible == 0) {
					me._down.style.visibility="hidden";
					me._down.ggVisible=false;
				}
				else {
					me._down.style.visibility=(Number(me._down.style.opacity)>0||!me._down.style.opacity)?'inherit':'hidden';
					me._down.ggVisible=true;
				}
			}
		}
		this._down.ggUpdatePosition=function () {
		}
		this._controller.appendChild(this._down);
		this._left=document.createElement('div');
		this._left__img=document.createElement('img');
		this._left__img.className='ggskin ggskin_svg';
		this._left__img.setAttribute('src',basePath + 'images/left.svg');
		this._left__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._left__img['ondragstart']=function() { return false; };
		this._left.appendChild(this._left__img);
		this._left__imgo=document.createElement('img');
		this._left__imgo.className='ggskin ggskin_svg';
		this._left__imgo.setAttribute('src',basePath + 'images/left__o.svg');
		this._left__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._left__imgo['ondragstart']=function() { return false; };
		this._left.appendChild(this._left__imgo);
		this._left.ggId="left";
		this._left.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._left.ggVisible=true;
		this._left.className='ggskin ggskin_svg ';
		this._left.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : 0px;';
		hs+='position : absolute;';
		hs+='top : 10px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._left.setAttribute('style',hs);
		this._left.style[domTransform + 'Origin']='50% 50%';
		me._left.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._left.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._left.onmouseover=function () {
			me._left__img.style.visibility='hidden';
			me._left__imgo.style.visibility='inherit';
		}
		this._left.onmouseout=function () {
			me._left__img.style.visibility='inherit';
			me._left__imgo.style.visibility='hidden';
			me.elementMouseDown['left']=false;
		}
		this._left.onmousedown=function () {
			me.elementMouseDown['left']=true;
		}
		this._left.onmouseup=function () {
			me.elementMouseDown['left']=false;
		}
		this._left.ontouchend=function () {
			me.elementMouseDown['left']=false;
		}
		me._left.ggCurrentLogicStateVisible = -1;
		this._left.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.player.getViewerSize().width <= 1024) || 
				(me.player.getIsMobile() == true)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._left.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._left.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._left.style[domTransition]='';
				if (me._left.ggCurrentLogicStateVisible == 0) {
					me._left.style.visibility="hidden";
					me._left.ggVisible=false;
				}
				else {
					me._left.style.visibility=(Number(me._left.style.opacity)>0||!me._left.style.opacity)?'inherit':'hidden';
					me._left.ggVisible=true;
				}
			}
		}
		this._left.ggUpdatePosition=function () {
		}
		this._controller.appendChild(this._left);
		this._right=document.createElement('div');
		this._right__img=document.createElement('img');
		this._right__img.className='ggskin ggskin_svg';
		this._right__img.setAttribute('src',basePath + 'images/right.svg');
		this._right__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._right__img['ondragstart']=function() { return false; };
		this._right.appendChild(this._right__img);
		this._right__imgo=document.createElement('img');
		this._right__imgo.className='ggskin ggskin_svg';
		this._right__imgo.setAttribute('src',basePath + 'images/right__o.svg');
		this._right__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._right__imgo['ondragstart']=function() { return false; };
		this._right.appendChild(this._right__imgo);
		this._right.ggId="right";
		this._right.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._right.ggVisible=true;
		this._right.className='ggskin ggskin_svg ';
		this._right.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : 50px;';
		hs+='position : absolute;';
		hs+='top : 10px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._right.setAttribute('style',hs);
		this._right.style[domTransform + 'Origin']='50% 50%';
		me._right.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._right.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._right.onmouseover=function () {
			me._right__img.style.visibility='hidden';
			me._right__imgo.style.visibility='inherit';
		}
		this._right.onmouseout=function () {
			me._right__img.style.visibility='inherit';
			me._right__imgo.style.visibility='hidden';
			me.elementMouseDown['right']=false;
		}
		this._right.onmousedown=function () {
			me.elementMouseDown['right']=true;
		}
		this._right.onmouseup=function () {
			me.elementMouseDown['right']=false;
		}
		this._right.ontouchend=function () {
			me.elementMouseDown['right']=false;
		}
		me._right.ggCurrentLogicStateVisible = -1;
		this._right.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.player.getViewerSize().width <= 1024) || 
				(me.player.getIsMobile() == true)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._right.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._right.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._right.style[domTransition]='';
				if (me._right.ggCurrentLogicStateVisible == 0) {
					me._right.style.visibility="hidden";
					me._right.ggVisible=false;
				}
				else {
					me._right.style.visibility=(Number(me._right.style.opacity)>0||!me._right.style.opacity)?'inherit':'hidden';
					me._right.ggVisible=true;
				}
			}
		}
		this._right.ggUpdatePosition=function () {
		}
		this._controller.appendChild(this._right);
		this._zoomin=document.createElement('div');
		this._zoomin__img=document.createElement('img');
		this._zoomin__img.className='ggskin ggskin_svg';
		this._zoomin__img.setAttribute('src',basePath + 'images/zoomin.svg');
		this._zoomin__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._zoomin__img['ondragstart']=function() { return false; };
		this._zoomin.appendChild(this._zoomin__img);
		this._zoomin__imgo=document.createElement('img');
		this._zoomin__imgo.className='ggskin ggskin_svg';
		this._zoomin__imgo.setAttribute('src',basePath + 'images/zoomin__o.svg');
		this._zoomin__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._zoomin__imgo['ondragstart']=function() { return false; };
		this._zoomin.appendChild(this._zoomin__imgo);
		this._zoomin.ggId="zoomin";
		this._zoomin.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._zoomin.ggVisible=true;
		this._zoomin.className='ggskin ggskin_svg ';
		this._zoomin.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : 90px;';
		hs+='position : absolute;';
		hs+='top : 10px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._zoomin.setAttribute('style',hs);
		this._zoomin.style[domTransform + 'Origin']='50% 50%';
		me._zoomin.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._zoomin.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._zoomin.onmouseover=function () {
			me._zoomin__img.style.visibility='hidden';
			me._zoomin__imgo.style.visibility='inherit';
			me.elementMouseOver['zoomin']=true;
		}
		this._zoomin.onmouseout=function () {
			me._zoomin__img.style.visibility='inherit';
			me._zoomin__imgo.style.visibility='hidden';
			me.elementMouseDown['zoomin']=false;
			me.elementMouseOver['zoomin']=false;
		}
		this._zoomin.onmousedown=function () {
			me.elementMouseDown['zoomin']=true;
		}
		this._zoomin.onmouseup=function () {
			me.elementMouseDown['zoomin']=false;
		}
		this._zoomin.ontouchend=function () {
			me.elementMouseDown['zoomin']=false;
			me.elementMouseOver['zoomin']=false;
		}
		this._zoomin.ggUpdatePosition=function () {
		}
		this._tt_zoomin=document.createElement('div');
		this._tt_zoomin__text=document.createElement('div');
		this._tt_zoomin.className='ggskin ggskin_textdiv';
		this._tt_zoomin.ggTextDiv=this._tt_zoomin__text;
		this._tt_zoomin.ggId="tt_zoomin";
		this._tt_zoomin.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_zoomin.ggVisible=false;
		this._tt_zoomin.className='ggskin ggskin_text ';
		this._tt_zoomin.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -55px;';
		hs+='position : absolute;';
		hs+='top : 36px;';
		hs+='visibility : hidden;';
		hs+='width : 148px;';
		this._tt_zoomin.setAttribute('style',hs);
		this._tt_zoomin.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(0,0,0,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_zoomin__text.setAttribute('style',hs);
		this._tt_zoomin__text.innerHTML="Zoom In";
		this._tt_zoomin.appendChild(this._tt_zoomin__text);
		me._tt_zoomin.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_zoomin.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		me._tt_zoomin.ggCurrentLogicStateVisible = -1;
		this._tt_zoomin.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.elementMouseOver['zoomin'] == true) && 
				(me.player.getIsMobile() == false)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._tt_zoomin.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._tt_zoomin.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._tt_zoomin.style[domTransition]='';
				if (me._tt_zoomin.ggCurrentLogicStateVisible == 0) {
					me._tt_zoomin.style.visibility=(Number(me._tt_zoomin.style.opacity)>0||!me._tt_zoomin.style.opacity)?'inherit':'hidden';
					me._tt_zoomin.ggVisible=true;
				}
				else {
					me._tt_zoomin.style.visibility="hidden";
					me._tt_zoomin.ggVisible=false;
				}
			}
		}
		this._tt_zoomin.ggUpdatePosition=function () {
		}
		this._tt_zoomin_white=document.createElement('div');
		this._tt_zoomin_white__text=document.createElement('div');
		this._tt_zoomin_white.className='ggskin ggskin_textdiv';
		this._tt_zoomin_white.ggTextDiv=this._tt_zoomin_white__text;
		this._tt_zoomin_white.ggId="tt_zoomin_white";
		this._tt_zoomin_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_zoomin_white.ggVisible=true;
		this._tt_zoomin_white.className='ggskin ggskin_text ';
		this._tt_zoomin_white.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -1px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : inherit;';
		hs+='width : 148px;';
		this._tt_zoomin_white.setAttribute('style',hs);
		this._tt_zoomin_white.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_zoomin_white__text.setAttribute('style',hs);
		this._tt_zoomin_white__text.innerHTML="Zoom In";
		this._tt_zoomin_white.appendChild(this._tt_zoomin_white__text);
		me._tt_zoomin_white.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_zoomin_white.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._tt_zoomin_white.ggUpdatePosition=function () {
		}
		this._tt_zoomin.appendChild(this._tt_zoomin_white);
		this._zoomin.appendChild(this._tt_zoomin);
		this._controller.appendChild(this._zoomin);
		this._zoomout=document.createElement('div');
		this._zoomout__img=document.createElement('img');
		this._zoomout__img.className='ggskin ggskin_svg';
		this._zoomout__img.setAttribute('src',basePath + 'images/zoomout.svg');
		this._zoomout__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._zoomout__img['ondragstart']=function() { return false; };
		this._zoomout.appendChild(this._zoomout__img);
		this._zoomout__imgo=document.createElement('img');
		this._zoomout__imgo.className='ggskin ggskin_svg';
		this._zoomout__imgo.setAttribute('src',basePath + 'images/zoomout__o.svg');
		this._zoomout__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._zoomout__imgo['ondragstart']=function() { return false; };
		this._zoomout.appendChild(this._zoomout__imgo);
		this._zoomout.ggId="zoomout";
		this._zoomout.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._zoomout.ggVisible=true;
		this._zoomout.className='ggskin ggskin_svg ';
		this._zoomout.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : 120px;';
		hs+='position : absolute;';
		hs+='top : 10px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._zoomout.setAttribute('style',hs);
		this._zoomout.style[domTransform + 'Origin']='50% 50%';
		me._zoomout.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._zoomout.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._zoomout.onmouseover=function () {
			me._zoomout__img.style.visibility='hidden';
			me._zoomout__imgo.style.visibility='inherit';
			me.elementMouseOver['zoomout']=true;
		}
		this._zoomout.onmouseout=function () {
			me._zoomout__img.style.visibility='inherit';
			me._zoomout__imgo.style.visibility='hidden';
			me.elementMouseDown['zoomout']=false;
			me.elementMouseOver['zoomout']=false;
		}
		this._zoomout.onmousedown=function () {
			me.elementMouseDown['zoomout']=true;
		}
		this._zoomout.onmouseup=function () {
			me.elementMouseDown['zoomout']=false;
		}
		this._zoomout.ontouchend=function () {
			me.elementMouseDown['zoomout']=false;
			me.elementMouseOver['zoomout']=false;
		}
		this._zoomout.ggUpdatePosition=function () {
		}
		this._tt_zoomout=document.createElement('div');
		this._tt_zoomout__text=document.createElement('div');
		this._tt_zoomout.className='ggskin ggskin_textdiv';
		this._tt_zoomout.ggTextDiv=this._tt_zoomout__text;
		this._tt_zoomout.ggId="tt_zoomout";
		this._tt_zoomout.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_zoomout.ggVisible=false;
		this._tt_zoomout.className='ggskin ggskin_text ';
		this._tt_zoomout.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -55px;';
		hs+='position : absolute;';
		hs+='top : 36px;';
		hs+='visibility : hidden;';
		hs+='width : 148px;';
		this._tt_zoomout.setAttribute('style',hs);
		this._tt_zoomout.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(0,0,0,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_zoomout__text.setAttribute('style',hs);
		this._tt_zoomout__text.innerHTML="Zoom Out";
		this._tt_zoomout.appendChild(this._tt_zoomout__text);
		me._tt_zoomout.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_zoomout.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		me._tt_zoomout.ggCurrentLogicStateVisible = -1;
		this._tt_zoomout.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.elementMouseOver['zoomout'] == true) && 
				(me.player.getIsMobile() == false)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._tt_zoomout.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._tt_zoomout.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._tt_zoomout.style[domTransition]='';
				if (me._tt_zoomout.ggCurrentLogicStateVisible == 0) {
					me._tt_zoomout.style.visibility=(Number(me._tt_zoomout.style.opacity)>0||!me._tt_zoomout.style.opacity)?'inherit':'hidden';
					me._tt_zoomout.ggVisible=true;
				}
				else {
					me._tt_zoomout.style.visibility="hidden";
					me._tt_zoomout.ggVisible=false;
				}
			}
		}
		this._tt_zoomout.ggUpdatePosition=function () {
		}
		this._tt_zoomout_white=document.createElement('div');
		this._tt_zoomout_white__text=document.createElement('div');
		this._tt_zoomout_white.className='ggskin ggskin_textdiv';
		this._tt_zoomout_white.ggTextDiv=this._tt_zoomout_white__text;
		this._tt_zoomout_white.ggId="tt_zoomout_white";
		this._tt_zoomout_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_zoomout_white.ggVisible=true;
		this._tt_zoomout_white.className='ggskin ggskin_text ';
		this._tt_zoomout_white.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -1px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : inherit;';
		hs+='width : 148px;';
		this._tt_zoomout_white.setAttribute('style',hs);
		this._tt_zoomout_white.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_zoomout_white__text.setAttribute('style',hs);
		this._tt_zoomout_white__text.innerHTML="Zoom Out";
		this._tt_zoomout_white.appendChild(this._tt_zoomout_white__text);
		me._tt_zoomout_white.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_zoomout_white.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._tt_zoomout_white.ggUpdatePosition=function () {
		}
		this._tt_zoomout.appendChild(this._tt_zoomout_white);
		this._zoomout.appendChild(this._tt_zoomout);
		this._controller.appendChild(this._zoomout);
		this._button_simplex_auto_rotate=document.createElement('div');
		this._button_simplex_auto_rotate.ggId="button_simplex_auto_rotate";
		this._button_simplex_auto_rotate.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._button_simplex_auto_rotate.ggVisible=true;
		this._button_simplex_auto_rotate.className='ggskin ggskin_container ';
		this._button_simplex_auto_rotate.ggType='container';
		hs ='';
		hs+='height : 32px;';
		hs+='left : 160px;';
		hs+='position : absolute;';
		hs+='top : 10px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._button_simplex_auto_rotate.setAttribute('style',hs);
		this._button_simplex_auto_rotate.style[domTransform + 'Origin']='50% 50%';
		me._button_simplex_auto_rotate.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._button_simplex_auto_rotate.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._button_simplex_auto_rotate.ggUpdatePosition=function () {
		}
		this._button_stop_auto_rotate=document.createElement('div');
		this._button_stop_auto_rotate__img=document.createElement('img');
		this._button_stop_auto_rotate__img.className='ggskin ggskin_svg';
		this._button_stop_auto_rotate__img.setAttribute('src',basePath + 'images/button_stop_auto_rotate.svg');
		this._button_stop_auto_rotate__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._button_stop_auto_rotate__img['ondragstart']=function() { return false; };
		this._button_stop_auto_rotate.appendChild(this._button_stop_auto_rotate__img);
		this._button_stop_auto_rotate__imgo=document.createElement('img');
		this._button_stop_auto_rotate__imgo.className='ggskin ggskin_svg';
		this._button_stop_auto_rotate__imgo.setAttribute('src',basePath + 'images/button_stop_auto_rotate__o.svg');
		this._button_stop_auto_rotate__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._button_stop_auto_rotate__imgo['ondragstart']=function() { return false; };
		this._button_stop_auto_rotate.appendChild(this._button_stop_auto_rotate__imgo);
		this._button_stop_auto_rotate.ggId="button stop auto rotate";
		this._button_stop_auto_rotate.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._button_stop_auto_rotate.ggVisible=false;
		this._button_stop_auto_rotate.className='ggskin ggskin_svg ';
		this._button_stop_auto_rotate.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : 0px;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : hidden;';
		hs+='width : 32px;';
		this._button_stop_auto_rotate.setAttribute('style',hs);
		this._button_stop_auto_rotate.style[domTransform + 'Origin']='50% 50%';
		me._button_stop_auto_rotate.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._button_stop_auto_rotate.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._button_stop_auto_rotate.onclick=function () {
			me.player.stopAutorotate();
			me._button_stop_auto_rotate.style[domTransition]='none';
			me._button_stop_auto_rotate.style.visibility='hidden';
			me._button_stop_auto_rotate.ggVisible=false;
			me._button_start_auto_rotate.style[domTransition]='none';
			me._button_start_auto_rotate.style.visibility=(Number(me._button_start_auto_rotate.style.opacity)>0||!me._button_start_auto_rotate.style.opacity)?'inherit':'hidden';
			me._button_start_auto_rotate.ggVisible=true;
		}
		this._button_stop_auto_rotate.onmouseover=function () {
			me._button_stop_auto_rotate__img.style.visibility='hidden';
			me._button_stop_auto_rotate__imgo.style.visibility='inherit';
			me.elementMouseOver['button_stop_auto_rotate']=true;
		}
		this._button_stop_auto_rotate.onmouseout=function () {
			me._button_stop_auto_rotate__img.style.visibility='inherit';
			me._button_stop_auto_rotate__imgo.style.visibility='hidden';
			me.elementMouseOver['button_stop_auto_rotate']=false;
		}
		this._button_stop_auto_rotate.ontouchend=function () {
			me.elementMouseOver['button_stop_auto_rotate']=false;
		}
		this._button_stop_auto_rotate.ggUpdatePosition=function () {
		}
		this._tt_stop_auto_rotate=document.createElement('div');
		this._tt_stop_auto_rotate__text=document.createElement('div');
		this._tt_stop_auto_rotate.className='ggskin ggskin_textdiv';
		this._tt_stop_auto_rotate.ggTextDiv=this._tt_stop_auto_rotate__text;
		this._tt_stop_auto_rotate.ggId="tt_stop_auto_rotate";
		this._tt_stop_auto_rotate.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_stop_auto_rotate.ggVisible=false;
		this._tt_stop_auto_rotate.className='ggskin ggskin_text ';
		this._tt_stop_auto_rotate.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -59px;';
		hs+='position : absolute;';
		hs+='top : 36px;';
		hs+='visibility : hidden;';
		hs+='width : 148px;';
		this._tt_stop_auto_rotate.setAttribute('style',hs);
		this._tt_stop_auto_rotate.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(0,0,0,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_stop_auto_rotate__text.setAttribute('style',hs);
		this._tt_stop_auto_rotate__text.innerHTML="Stop Auto Rotate";
		this._tt_stop_auto_rotate.appendChild(this._tt_stop_auto_rotate__text);
		me._tt_stop_auto_rotate.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_stop_auto_rotate.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		me._tt_stop_auto_rotate.ggCurrentLogicStateVisible = -1;
		this._tt_stop_auto_rotate.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.elementMouseOver['button_stop_auto_rotate'] == true) && 
				(me.player.getIsMobile() == false)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._tt_stop_auto_rotate.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._tt_stop_auto_rotate.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._tt_stop_auto_rotate.style[domTransition]='';
				if (me._tt_stop_auto_rotate.ggCurrentLogicStateVisible == 0) {
					me._tt_stop_auto_rotate.style.visibility=(Number(me._tt_stop_auto_rotate.style.opacity)>0||!me._tt_stop_auto_rotate.style.opacity)?'inherit':'hidden';
					me._tt_stop_auto_rotate.ggVisible=true;
				}
				else {
					me._tt_stop_auto_rotate.style.visibility="hidden";
					me._tt_stop_auto_rotate.ggVisible=false;
				}
			}
		}
		this._tt_stop_auto_rotate.ggUpdatePosition=function () {
		}
		this._tt_stop_auto_rotate_white=document.createElement('div');
		this._tt_stop_auto_rotate_white__text=document.createElement('div');
		this._tt_stop_auto_rotate_white.className='ggskin ggskin_textdiv';
		this._tt_stop_auto_rotate_white.ggTextDiv=this._tt_stop_auto_rotate_white__text;
		this._tt_stop_auto_rotate_white.ggId="tt_stop_auto_rotate_white";
		this._tt_stop_auto_rotate_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_stop_auto_rotate_white.ggVisible=true;
		this._tt_stop_auto_rotate_white.className='ggskin ggskin_text ';
		this._tt_stop_auto_rotate_white.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -1px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : inherit;';
		hs+='width : 148px;';
		this._tt_stop_auto_rotate_white.setAttribute('style',hs);
		this._tt_stop_auto_rotate_white.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_stop_auto_rotate_white__text.setAttribute('style',hs);
		this._tt_stop_auto_rotate_white__text.innerHTML="Stop Auto Rotate";
		this._tt_stop_auto_rotate_white.appendChild(this._tt_stop_auto_rotate_white__text);
		me._tt_stop_auto_rotate_white.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_stop_auto_rotate_white.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._tt_stop_auto_rotate_white.ggUpdatePosition=function () {
		}
		this._tt_stop_auto_rotate.appendChild(this._tt_stop_auto_rotate_white);
		this._button_stop_auto_rotate.appendChild(this._tt_stop_auto_rotate);
		this._button_simplex_auto_rotate.appendChild(this._button_stop_auto_rotate);
		this._button_start_auto_rotate=document.createElement('div');
		this._button_start_auto_rotate__img=document.createElement('img');
		this._button_start_auto_rotate__img.className='ggskin ggskin_svg';
		this._button_start_auto_rotate__img.setAttribute('src',basePath + 'images/button_start_auto_rotate.svg');
		this._button_start_auto_rotate__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._button_start_auto_rotate__img['ondragstart']=function() { return false; };
		this._button_start_auto_rotate.appendChild(this._button_start_auto_rotate__img);
		this._button_start_auto_rotate__imgo=document.createElement('img');
		this._button_start_auto_rotate__imgo.className='ggskin ggskin_svg';
		this._button_start_auto_rotate__imgo.setAttribute('src',basePath + 'images/button_start_auto_rotate__o.svg');
		this._button_start_auto_rotate__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._button_start_auto_rotate__imgo['ondragstart']=function() { return false; };
		this._button_start_auto_rotate.appendChild(this._button_start_auto_rotate__imgo);
		this._button_start_auto_rotate.ggId="button start auto rotate";
		this._button_start_auto_rotate.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._button_start_auto_rotate.ggVisible=true;
		this._button_start_auto_rotate.className='ggskin ggskin_svg ';
		this._button_start_auto_rotate.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : 0px;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._button_start_auto_rotate.setAttribute('style',hs);
		this._button_start_auto_rotate.style[domTransform + 'Origin']='50% 50%';
		me._button_start_auto_rotate.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._button_start_auto_rotate.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._button_start_auto_rotate.onclick=function () {
			me.player.startAutorotate(0.1,5,1);
			me._button_start_auto_rotate.style[domTransition]='none';
			me._button_start_auto_rotate.style.visibility='hidden';
			me._button_start_auto_rotate.ggVisible=false;
			me._button_stop_auto_rotate.style[domTransition]='none';
			me._button_stop_auto_rotate.style.visibility=(Number(me._button_stop_auto_rotate.style.opacity)>0||!me._button_stop_auto_rotate.style.opacity)?'inherit':'hidden';
			me._button_stop_auto_rotate.ggVisible=true;
		}
		this._button_start_auto_rotate.onmouseover=function () {
			me._button_start_auto_rotate__img.style.visibility='hidden';
			me._button_start_auto_rotate__imgo.style.visibility='inherit';
			me.elementMouseOver['button_start_auto_rotate']=true;
		}
		this._button_start_auto_rotate.onmouseout=function () {
			me._button_start_auto_rotate__img.style.visibility='inherit';
			me._button_start_auto_rotate__imgo.style.visibility='hidden';
			me.elementMouseOver['button_start_auto_rotate']=false;
		}
		this._button_start_auto_rotate.ontouchend=function () {
			me.elementMouseOver['button_start_auto_rotate']=false;
		}
		this._button_start_auto_rotate.ggUpdatePosition=function () {
		}
		this._tt_start_auto_rotate=document.createElement('div');
		this._tt_start_auto_rotate__text=document.createElement('div');
		this._tt_start_auto_rotate.className='ggskin ggskin_textdiv';
		this._tt_start_auto_rotate.ggTextDiv=this._tt_start_auto_rotate__text;
		this._tt_start_auto_rotate.ggId="tt_start_auto_rotate";
		this._tt_start_auto_rotate.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_start_auto_rotate.ggVisible=false;
		this._tt_start_auto_rotate.className='ggskin ggskin_text ';
		this._tt_start_auto_rotate.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -59px;';
		hs+='position : absolute;';
		hs+='top : 36px;';
		hs+='visibility : hidden;';
		hs+='width : 148px;';
		this._tt_start_auto_rotate.setAttribute('style',hs);
		this._tt_start_auto_rotate.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(0,0,0,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_start_auto_rotate__text.setAttribute('style',hs);
		this._tt_start_auto_rotate__text.innerHTML="Start Auto Rotate";
		this._tt_start_auto_rotate.appendChild(this._tt_start_auto_rotate__text);
		me._tt_start_auto_rotate.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_start_auto_rotate.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		me._tt_start_auto_rotate.ggCurrentLogicStateVisible = -1;
		this._tt_start_auto_rotate.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.elementMouseOver['button_start_auto_rotate'] == true) && 
				(me.player.getIsMobile() == false)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._tt_start_auto_rotate.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._tt_start_auto_rotate.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._tt_start_auto_rotate.style[domTransition]='';
				if (me._tt_start_auto_rotate.ggCurrentLogicStateVisible == 0) {
					me._tt_start_auto_rotate.style.visibility=(Number(me._tt_start_auto_rotate.style.opacity)>0||!me._tt_start_auto_rotate.style.opacity)?'inherit':'hidden';
					me._tt_start_auto_rotate.ggVisible=true;
				}
				else {
					me._tt_start_auto_rotate.style.visibility="hidden";
					me._tt_start_auto_rotate.ggVisible=false;
				}
			}
		}
		this._tt_start_auto_rotate.ggUpdatePosition=function () {
		}
		this._tt_start_auto_rotate_white=document.createElement('div');
		this._tt_start_auto_rotate_white__text=document.createElement('div');
		this._tt_start_auto_rotate_white.className='ggskin ggskin_textdiv';
		this._tt_start_auto_rotate_white.ggTextDiv=this._tt_start_auto_rotate_white__text;
		this._tt_start_auto_rotate_white.ggId="tt_start_auto_rotate_white";
		this._tt_start_auto_rotate_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_start_auto_rotate_white.ggVisible=true;
		this._tt_start_auto_rotate_white.className='ggskin ggskin_text ';
		this._tt_start_auto_rotate_white.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -1px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : inherit;';
		hs+='width : 148px;';
		this._tt_start_auto_rotate_white.setAttribute('style',hs);
		this._tt_start_auto_rotate_white.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_start_auto_rotate_white__text.setAttribute('style',hs);
		this._tt_start_auto_rotate_white__text.innerHTML="Start Auto Rotate";
		this._tt_start_auto_rotate_white.appendChild(this._tt_start_auto_rotate_white__text);
		me._tt_start_auto_rotate_white.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_start_auto_rotate_white.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._tt_start_auto_rotate_white.ggUpdatePosition=function () {
		}
		this._tt_start_auto_rotate.appendChild(this._tt_start_auto_rotate_white);
		this._button_start_auto_rotate.appendChild(this._tt_start_auto_rotate);
		this._button_simplex_auto_rotate.appendChild(this._button_start_auto_rotate);
		this._controller.appendChild(this._button_simplex_auto_rotate);
		this._button_simplex_movemode=document.createElement('div');
		this._button_simplex_movemode.ggId="button_simplex_movemode";
		this._button_simplex_movemode.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._button_simplex_movemode.ggVisible=true;
		this._button_simplex_movemode.className='ggskin ggskin_container ';
		this._button_simplex_movemode.ggType='container';
		hs ='';
		hs+='height : 32px;';
		hs+='left : 220px;';
		hs+='position : absolute;';
		hs+='top : 10px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._button_simplex_movemode.setAttribute('style',hs);
		this._button_simplex_movemode.style[domTransform + 'Origin']='50% 50%';
		me._button_simplex_movemode.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._button_simplex_movemode.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._button_simplex_movemode.ggUpdatePosition=function () {
		}
		this._controller.appendChild(this._button_simplex_movemode);
		this._button_simplex_fullscreen=document.createElement('div');
		this._button_simplex_fullscreen.ggId="button_simplex_fullscreen";
		this._button_simplex_fullscreen.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._button_simplex_fullscreen.ggVisible=true;
		this._button_simplex_fullscreen.className='ggskin ggskin_container ';
		this._button_simplex_fullscreen.ggType='container';
		hs ='';
		hs+='height : 32px;';
		hs+='left : 261px;';
		hs+='position : absolute;';
		hs+='top : 9px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._button_simplex_fullscreen.setAttribute('style',hs);
		this._button_simplex_fullscreen.style[domTransform + 'Origin']='50% 50%';
		me._button_simplex_fullscreen.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._button_simplex_fullscreen.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		me._button_simplex_fullscreen.ggCurrentLogicStateVisible = -1;
		this._button_simplex_fullscreen.ggUpdateConditionNodeChange=function () {
			var newLogicStateVisible;
			if (
				(me.player.getIsMobile() == true)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._button_simplex_fullscreen.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._button_simplex_fullscreen.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._button_simplex_fullscreen.style[domTransition]='';
				if (me._button_simplex_fullscreen.ggCurrentLogicStateVisible == 0) {
					me._button_simplex_fullscreen.style.visibility="hidden";
					me._button_simplex_fullscreen.ggVisible=false;
				}
				else {
					me._button_simplex_fullscreen.style.visibility=(Number(me._button_simplex_fullscreen.style.opacity)>0||!me._button_simplex_fullscreen.style.opacity)?'inherit':'hidden';
					me._button_simplex_fullscreen.ggVisible=true;
				}
			}
		}
		this._button_simplex_fullscreen.ggUpdatePosition=function () {
		}
		this._button_simplex_fullscreen.ggNodeChange=function () {
			me._button_simplex_fullscreen.ggUpdateConditionNodeChange();
		}
		this._button_image_normalscreen=document.createElement('div');
		this._button_image_normalscreen__img=document.createElement('img');
		this._button_image_normalscreen__img.className='ggskin ggskin_svg';
		this._button_image_normalscreen__img.setAttribute('src',basePath + 'images/button_image_normalscreen.svg');
		this._button_image_normalscreen__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._button_image_normalscreen__img['ondragstart']=function() { return false; };
		this._button_image_normalscreen.appendChild(this._button_image_normalscreen__img);
		this._button_image_normalscreen__imgo=document.createElement('img');
		this._button_image_normalscreen__imgo.className='ggskin ggskin_svg';
		this._button_image_normalscreen__imgo.setAttribute('src',basePath + 'images/button_image_normalscreen__o.svg');
		this._button_image_normalscreen__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._button_image_normalscreen__imgo['ondragstart']=function() { return false; };
		this._button_image_normalscreen.appendChild(this._button_image_normalscreen__imgo);
		this._button_image_normalscreen.ggId="button_image_normalscreen";
		this._button_image_normalscreen.ggLeft=-32;
		this._button_image_normalscreen.ggTop=-32;
		this._button_image_normalscreen.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._button_image_normalscreen.ggVisible=false;
		this._button_image_normalscreen.className='ggskin ggskin_svg ';
		this._button_image_normalscreen.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : -32px;';
		hs+='position : absolute;';
		hs+='top : -32px;';
		hs+='visibility : hidden;';
		hs+='width : 32px;';
		this._button_image_normalscreen.setAttribute('style',hs);
		this._button_image_normalscreen.style[domTransform + 'Origin']='50% 50%';
		me._button_image_normalscreen.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._button_image_normalscreen.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._button_image_normalscreen.onclick=function () {
			me.player.exitFullscreen();
		}
		this._button_image_normalscreen.onmouseover=function () {
			me._button_image_normalscreen__img.style.visibility='hidden';
			me._button_image_normalscreen__imgo.style.visibility='inherit';
			me.elementMouseOver['button_image_normalscreen']=true;
		}
		this._button_image_normalscreen.onmouseout=function () {
			me._button_image_normalscreen__img.style.visibility='inherit';
			me._button_image_normalscreen__imgo.style.visibility='hidden';
			me.elementMouseOver['button_image_normalscreen']=false;
		}
		this._button_image_normalscreen.ontouchend=function () {
			me.elementMouseOver['button_image_normalscreen']=false;
		}
		me._button_image_normalscreen.ggCurrentLogicStateVisible = -1;
		this._button_image_normalscreen.ggUpdateConditionResize=function () {
			var newLogicStateVisible;
			if (
				(me.player.getIsFullscreen() == true)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._button_image_normalscreen.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._button_image_normalscreen.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._button_image_normalscreen.style[domTransition]='';
				if (me._button_image_normalscreen.ggCurrentLogicStateVisible == 0) {
					me._button_image_normalscreen.style.visibility=(Number(me._button_image_normalscreen.style.opacity)>0||!me._button_image_normalscreen.style.opacity)?'inherit':'hidden';
					me._button_image_normalscreen.ggVisible=true;
				}
				else {
					me._button_image_normalscreen.style.visibility="hidden";
					me._button_image_normalscreen.ggVisible=false;
				}
			}
		}
		this._button_image_normalscreen.ggUpdatePosition=function () {
			this.style[domTransition]='none';
			if (this.parentNode) {
				var w=this.parentNode.offsetWidth;
					this.style.left=(this.ggLeft - 0 + w) + 'px';
				var h=this.parentNode.offsetHeight;
					this.style.top=(this.ggTop - 0 + h) + 'px';
			}
			me._button_image_normalscreen.ggUpdateConditionResize();
		}
		this._tt_exit_fullscreen=document.createElement('div');
		this._tt_exit_fullscreen__text=document.createElement('div');
		this._tt_exit_fullscreen.className='ggskin ggskin_textdiv';
		this._tt_exit_fullscreen.ggTextDiv=this._tt_exit_fullscreen__text;
		this._tt_exit_fullscreen.ggId="tt_exit_fullscreen";
		this._tt_exit_fullscreen.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_exit_fullscreen.ggVisible=false;
		this._tt_exit_fullscreen.className='ggskin ggskin_text ';
		this._tt_exit_fullscreen.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -59px;';
		hs+='position : absolute;';
		hs+='top : 36px;';
		hs+='visibility : hidden;';
		hs+='width : 148px;';
		this._tt_exit_fullscreen.setAttribute('style',hs);
		this._tt_exit_fullscreen.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(0,0,0,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_exit_fullscreen__text.setAttribute('style',hs);
		this._tt_exit_fullscreen__text.innerHTML="Exit Fullscreen";
		this._tt_exit_fullscreen.appendChild(this._tt_exit_fullscreen__text);
		me._tt_exit_fullscreen.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_exit_fullscreen.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		me._tt_exit_fullscreen.ggCurrentLogicStateVisible = -1;
		this._tt_exit_fullscreen.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.elementMouseOver['button_image_normalscreen'] == true) && 
				(me.player.getIsMobile() == false)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._tt_exit_fullscreen.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._tt_exit_fullscreen.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._tt_exit_fullscreen.style[domTransition]='';
				if (me._tt_exit_fullscreen.ggCurrentLogicStateVisible == 0) {
					me._tt_exit_fullscreen.style.visibility=(Number(me._tt_exit_fullscreen.style.opacity)>0||!me._tt_exit_fullscreen.style.opacity)?'inherit':'hidden';
					me._tt_exit_fullscreen.ggVisible=true;
				}
				else {
					me._tt_exit_fullscreen.style.visibility="hidden";
					me._tt_exit_fullscreen.ggVisible=false;
				}
			}
		}
		this._tt_exit_fullscreen.ggUpdatePosition=function () {
		}
		this._tt_exit_fullscreen_white=document.createElement('div');
		this._tt_exit_fullscreen_white__text=document.createElement('div');
		this._tt_exit_fullscreen_white.className='ggskin ggskin_textdiv';
		this._tt_exit_fullscreen_white.ggTextDiv=this._tt_exit_fullscreen_white__text;
		this._tt_exit_fullscreen_white.ggId="tt_exit_fullscreen_white";
		this._tt_exit_fullscreen_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_exit_fullscreen_white.ggVisible=true;
		this._tt_exit_fullscreen_white.className='ggskin ggskin_text ';
		this._tt_exit_fullscreen_white.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -1px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : inherit;';
		hs+='width : 148px;';
		this._tt_exit_fullscreen_white.setAttribute('style',hs);
		this._tt_exit_fullscreen_white.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_exit_fullscreen_white__text.setAttribute('style',hs);
		this._tt_exit_fullscreen_white__text.innerHTML="Exit Fullscreen";
		this._tt_exit_fullscreen_white.appendChild(this._tt_exit_fullscreen_white__text);
		me._tt_exit_fullscreen_white.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_exit_fullscreen_white.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._tt_exit_fullscreen_white.ggUpdatePosition=function () {
		}
		this._tt_exit_fullscreen.appendChild(this._tt_exit_fullscreen_white);
		this._button_image_normalscreen.appendChild(this._tt_exit_fullscreen);
		this._button_simplex_fullscreen.appendChild(this._button_image_normalscreen);
		this._button_image_fullscreen=document.createElement('div');
		this._button_image_fullscreen__img=document.createElement('img');
		this._button_image_fullscreen__img.className='ggskin ggskin_svg';
		this._button_image_fullscreen__img.setAttribute('src',basePath + 'images/button_image_fullscreen.svg');
		this._button_image_fullscreen__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._button_image_fullscreen__img['ondragstart']=function() { return false; };
		this._button_image_fullscreen.appendChild(this._button_image_fullscreen__img);
		this._button_image_fullscreen__imgo=document.createElement('img');
		this._button_image_fullscreen__imgo.className='ggskin ggskin_svg';
		this._button_image_fullscreen__imgo.setAttribute('src',basePath + 'images/button_image_fullscreen__o.svg');
		this._button_image_fullscreen__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._button_image_fullscreen__imgo['ondragstart']=function() { return false; };
		this._button_image_fullscreen.appendChild(this._button_image_fullscreen__imgo);
		this._button_image_fullscreen.ggId="button_image_fullscreen";
		this._button_image_fullscreen.ggLeft=-32;
		this._button_image_fullscreen.ggTop=-32;
		this._button_image_fullscreen.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._button_image_fullscreen.ggVisible=true;
		this._button_image_fullscreen.className='ggskin ggskin_svg ';
		this._button_image_fullscreen.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : -32px;';
		hs+='position : absolute;';
		hs+='top : -32px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._button_image_fullscreen.setAttribute('style',hs);
		this._button_image_fullscreen.style[domTransform + 'Origin']='50% 50%';
		me._button_image_fullscreen.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._button_image_fullscreen.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._button_image_fullscreen.onclick=function () {
			me.player.enterFullscreen();
		}
		this._button_image_fullscreen.onmouseover=function () {
			me._button_image_fullscreen__img.style.visibility='hidden';
			me._button_image_fullscreen__imgo.style.visibility='inherit';
			me.elementMouseOver['button_image_fullscreen']=true;
		}
		this._button_image_fullscreen.onmouseout=function () {
			me._button_image_fullscreen__img.style.visibility='inherit';
			me._button_image_fullscreen__imgo.style.visibility='hidden';
			me.elementMouseOver['button_image_fullscreen']=false;
		}
		this._button_image_fullscreen.ontouchend=function () {
			me.elementMouseOver['button_image_fullscreen']=false;
		}
		me._button_image_fullscreen.ggCurrentLogicStateVisible = -1;
		this._button_image_fullscreen.ggUpdateConditionResize=function () {
			var newLogicStateVisible;
			if (
				(me.player.getIsFullscreen() == true)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._button_image_fullscreen.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._button_image_fullscreen.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._button_image_fullscreen.style[domTransition]='';
				if (me._button_image_fullscreen.ggCurrentLogicStateVisible == 0) {
					me._button_image_fullscreen.style.visibility="hidden";
					me._button_image_fullscreen.ggVisible=false;
				}
				else {
					me._button_image_fullscreen.style.visibility=(Number(me._button_image_fullscreen.style.opacity)>0||!me._button_image_fullscreen.style.opacity)?'inherit':'hidden';
					me._button_image_fullscreen.ggVisible=true;
				}
			}
		}
		this._button_image_fullscreen.ggUpdatePosition=function () {
			this.style[domTransition]='none';
			if (this.parentNode) {
				var w=this.parentNode.offsetWidth;
					this.style.left=(this.ggLeft - 0 + w) + 'px';
				var h=this.parentNode.offsetHeight;
					this.style.top=(this.ggTop - 0 + h) + 'px';
			}
			me._button_image_fullscreen.ggUpdateConditionResize();
		}
		this._tt_enter_fullscreen=document.createElement('div');
		this._tt_enter_fullscreen__text=document.createElement('div');
		this._tt_enter_fullscreen.className='ggskin ggskin_textdiv';
		this._tt_enter_fullscreen.ggTextDiv=this._tt_enter_fullscreen__text;
		this._tt_enter_fullscreen.ggId="tt_enter_fullscreen";
		this._tt_enter_fullscreen.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_enter_fullscreen.ggVisible=false;
		this._tt_enter_fullscreen.className='ggskin ggskin_text ';
		this._tt_enter_fullscreen.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -59px;';
		hs+='position : absolute;';
		hs+='top : 36px;';
		hs+='visibility : hidden;';
		hs+='width : 148px;';
		this._tt_enter_fullscreen.setAttribute('style',hs);
		this._tt_enter_fullscreen.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(0,0,0,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_enter_fullscreen__text.setAttribute('style',hs);
		this._tt_enter_fullscreen__text.innerHTML="Enter Fullscreen";
		this._tt_enter_fullscreen.appendChild(this._tt_enter_fullscreen__text);
		me._tt_enter_fullscreen.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_enter_fullscreen.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		me._tt_enter_fullscreen.ggCurrentLogicStateVisible = -1;
		this._tt_enter_fullscreen.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.elementMouseOver['button_image_fullscreen'] == true) && 
				(me.player.getIsMobile() == false)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._tt_enter_fullscreen.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._tt_enter_fullscreen.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._tt_enter_fullscreen.style[domTransition]='';
				if (me._tt_enter_fullscreen.ggCurrentLogicStateVisible == 0) {
					me._tt_enter_fullscreen.style.visibility=(Number(me._tt_enter_fullscreen.style.opacity)>0||!me._tt_enter_fullscreen.style.opacity)?'inherit':'hidden';
					me._tt_enter_fullscreen.ggVisible=true;
				}
				else {
					me._tt_enter_fullscreen.style.visibility="hidden";
					me._tt_enter_fullscreen.ggVisible=false;
				}
			}
		}
		this._tt_enter_fullscreen.ggUpdatePosition=function () {
		}
		this._tt_enter_fullscreen_white=document.createElement('div');
		this._tt_enter_fullscreen_white__text=document.createElement('div');
		this._tt_enter_fullscreen_white.className='ggskin ggskin_textdiv';
		this._tt_enter_fullscreen_white.ggTextDiv=this._tt_enter_fullscreen_white__text;
		this._tt_enter_fullscreen_white.ggId="tt_enter_fullscreen_white";
		this._tt_enter_fullscreen_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_enter_fullscreen_white.ggVisible=true;
		this._tt_enter_fullscreen_white.className='ggskin ggskin_text ';
		this._tt_enter_fullscreen_white.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -1px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : inherit;';
		hs+='width : 148px;';
		this._tt_enter_fullscreen_white.setAttribute('style',hs);
		this._tt_enter_fullscreen_white.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_enter_fullscreen_white__text.setAttribute('style',hs);
		this._tt_enter_fullscreen_white__text.innerHTML="Enter Fullscreen";
		this._tt_enter_fullscreen_white.appendChild(this._tt_enter_fullscreen_white__text);
		me._tt_enter_fullscreen_white.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_enter_fullscreen_white.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._tt_enter_fullscreen_white.ggUpdatePosition=function () {
		}
		this._tt_enter_fullscreen.appendChild(this._tt_enter_fullscreen_white);
		this._button_image_fullscreen.appendChild(this._tt_enter_fullscreen);
		this._button_simplex_fullscreen.appendChild(this._button_image_fullscreen);
		this._controller.appendChild(this._button_simplex_fullscreen);
		this._button_simplex_next_previous=document.createElement('div');
		this._button_simplex_next_previous.ggId="button_simplex_next_previous";
		this._button_simplex_next_previous.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._button_simplex_next_previous.ggVisible=true;
		this._button_simplex_next_previous.className='ggskin ggskin_container ';
		this._button_simplex_next_previous.ggType='container';
		hs ='';
		hs+='height : 32px;';
		hs+='left : 191px;';
		hs+='position : absolute;';
		hs+='top : 10px;';
		hs+='visibility : inherit;';
		hs+='width : 72px;';
		this._button_simplex_next_previous.setAttribute('style',hs);
		this._button_simplex_next_previous.style[domTransform + 'Origin']='50% 50%';
		me._button_simplex_next_previous.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._button_simplex_next_previous.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._button_simplex_next_previous.ggUpdatePosition=function () {
		}
		this._pano_prev=document.createElement('div');
		this._pano_prev__img=document.createElement('img');
		this._pano_prev__img.className='ggskin ggskin_svg';
		this._pano_prev__img.setAttribute('src',basePath + 'images/pano_prev.svg');
		this._pano_prev__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._pano_prev__img['ondragstart']=function() { return false; };
		this._pano_prev.appendChild(this._pano_prev__img);
		this._pano_prev__imgo=document.createElement('img');
		this._pano_prev__imgo.className='ggskin ggskin_svg';
		this._pano_prev__imgo.setAttribute('src',basePath + 'images/pano_prev__o.svg');
		this._pano_prev__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._pano_prev__imgo['ondragstart']=function() { return false; };
		this._pano_prev.appendChild(this._pano_prev__imgo);
		this._pano_prev.ggId="Pano Prev";
		this._pano_prev.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._pano_prev.ggVisible=true;
		this._pano_prev.className='ggskin ggskin_svg ';
		this._pano_prev.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : 4px;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._pano_prev.setAttribute('style',hs);
		this._pano_prev.style[domTransform + 'Origin']='50% 50%';
		me._pano_prev.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._pano_prev.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._pano_prev.onclick=function () {
			me.player.openNext("{"+me.player.getPrevNode()+"}","");
		}
		this._pano_prev.onmouseover=function () {
			me._pano_prev__img.style.visibility='hidden';
			me._pano_prev__imgo.style.visibility='inherit';
			me.elementMouseOver['pano_prev']=true;
		}
		this._pano_prev.onmouseout=function () {
			me._pano_prev__img.style.visibility='inherit';
			me._pano_prev__imgo.style.visibility='hidden';
			me.elementMouseOver['pano_prev']=false;
		}
		this._pano_prev.ontouchend=function () {
			me.elementMouseOver['pano_prev']=false;
		}
		this._pano_prev.ggUpdatePosition=function () {
		}
		this._tt_panoprev=document.createElement('div');
		this._tt_panoprev__text=document.createElement('div');
		this._tt_panoprev.className='ggskin ggskin_textdiv';
		this._tt_panoprev.ggTextDiv=this._tt_panoprev__text;
		this._tt_panoprev.ggId="tt_panoprev";
		this._tt_panoprev.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_panoprev.ggVisible=false;
		this._tt_panoprev.className='ggskin ggskin_text ';
		this._tt_panoprev.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -59px;';
		hs+='position : absolute;';
		hs+='top : 33px;';
		hs+='visibility : hidden;';
		hs+='width : 148px;';
		this._tt_panoprev.setAttribute('style',hs);
		this._tt_panoprev.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(0,0,0,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_panoprev__text.setAttribute('style',hs);
		this._tt_panoprev__text.innerHTML="Previous Panorama";
		this._tt_panoprev.appendChild(this._tt_panoprev__text);
		me._tt_panoprev.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_panoprev.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		me._tt_panoprev.ggCurrentLogicStateVisible = -1;
		this._tt_panoprev.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.elementMouseOver['pano_prev'] == true)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._tt_panoprev.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._tt_panoprev.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._tt_panoprev.style[domTransition]='';
				if (me._tt_panoprev.ggCurrentLogicStateVisible == 0) {
					me._tt_panoprev.style.visibility=(Number(me._tt_panoprev.style.opacity)>0||!me._tt_panoprev.style.opacity)?'inherit':'hidden';
					me._tt_panoprev.ggVisible=true;
				}
				else {
					me._tt_panoprev.style.visibility="hidden";
					me._tt_panoprev.ggVisible=false;
				}
			}
		}
		this._tt_panoprev.ggUpdatePosition=function () {
		}
		this._tt_panoprev_white=document.createElement('div');
		this._tt_panoprev_white__text=document.createElement('div');
		this._tt_panoprev_white.className='ggskin ggskin_textdiv';
		this._tt_panoprev_white.ggTextDiv=this._tt_panoprev_white__text;
		this._tt_panoprev_white.ggId="tt_panoprev_white";
		this._tt_panoprev_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_panoprev_white.ggVisible=true;
		this._tt_panoprev_white.className='ggskin ggskin_text ';
		this._tt_panoprev_white.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -1px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : inherit;';
		hs+='width : 148px;';
		this._tt_panoprev_white.setAttribute('style',hs);
		this._tt_panoprev_white.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_panoprev_white__text.setAttribute('style',hs);
		this._tt_panoprev_white__text.innerHTML="Previous Panorama";
		this._tt_panoprev_white.appendChild(this._tt_panoprev_white__text);
		me._tt_panoprev_white.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_panoprev_white.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._tt_panoprev_white.ggUpdatePosition=function () {
		}
		this._tt_panoprev.appendChild(this._tt_panoprev_white);
		this._pano_prev.appendChild(this._tt_panoprev);
		this._button_simplex_next_previous.appendChild(this._pano_prev);
		this._pano_next=document.createElement('div');
		this._pano_next__img=document.createElement('img');
		this._pano_next__img.className='ggskin ggskin_svg';
		this._pano_next__img.setAttribute('src',basePath + 'images/pano_next.svg');
		this._pano_next__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._pano_next__img['ondragstart']=function() { return false; };
		this._pano_next.appendChild(this._pano_next__img);
		this._pano_next__imgo=document.createElement('img');
		this._pano_next__imgo.className='ggskin ggskin_svg';
		this._pano_next__imgo.setAttribute('src',basePath + 'images/pano_next__o.svg');
		this._pano_next__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._pano_next__imgo['ondragstart']=function() { return false; };
		this._pano_next.appendChild(this._pano_next__imgo);
		this._pano_next.ggId="Pano Next";
		this._pano_next.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._pano_next.ggVisible=true;
		this._pano_next.className='ggskin ggskin_svg ';
		this._pano_next.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : 35px;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._pano_next.setAttribute('style',hs);
		this._pano_next.style[domTransform + 'Origin']='50% 50%';
		me._pano_next.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._pano_next.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._pano_next.onclick=function () {
			me.player.openNext("{"+me.player.getNextNode()+"}","");
		}
		this._pano_next.onmouseover=function () {
			me._pano_next__img.style.visibility='hidden';
			me._pano_next__imgo.style.visibility='inherit';
			me.elementMouseOver['pano_next']=true;
		}
		this._pano_next.onmouseout=function () {
			me._pano_next__img.style.visibility='inherit';
			me._pano_next__imgo.style.visibility='hidden';
			me.elementMouseOver['pano_next']=false;
		}
		this._pano_next.ontouchend=function () {
			me.elementMouseOver['pano_next']=false;
		}
		this._pano_next.ggUpdatePosition=function () {
		}
		this._tt_panonext=document.createElement('div');
		this._tt_panonext__text=document.createElement('div');
		this._tt_panonext.className='ggskin ggskin_textdiv';
		this._tt_panonext.ggTextDiv=this._tt_panonext__text;
		this._tt_panonext.ggId="tt_panonext";
		this._tt_panonext.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_panonext.ggVisible=false;
		this._tt_panonext.className='ggskin ggskin_text ';
		this._tt_panonext.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -56px;';
		hs+='position : absolute;';
		hs+='top : 33px;';
		hs+='visibility : hidden;';
		hs+='width : 148px;';
		this._tt_panonext.setAttribute('style',hs);
		this._tt_panonext.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(0,0,0,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_panonext__text.setAttribute('style',hs);
		this._tt_panonext__text.innerHTML="Next Panorama";
		this._tt_panonext.appendChild(this._tt_panonext__text);
		me._tt_panonext.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_panonext.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		me._tt_panonext.ggCurrentLogicStateVisible = -1;
		this._tt_panonext.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.elementMouseOver['pano_next'] == true)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._tt_panonext.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._tt_panonext.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._tt_panonext.style[domTransition]='';
				if (me._tt_panonext.ggCurrentLogicStateVisible == 0) {
					me._tt_panonext.style.visibility=(Number(me._tt_panonext.style.opacity)>0||!me._tt_panonext.style.opacity)?'inherit':'hidden';
					me._tt_panonext.ggVisible=true;
				}
				else {
					me._tt_panonext.style.visibility="hidden";
					me._tt_panonext.ggVisible=false;
				}
			}
		}
		this._tt_panonext.ggUpdatePosition=function () {
		}
		this._tt_panonext_white=document.createElement('div');
		this._tt_panonext_white__text=document.createElement('div');
		this._tt_panonext_white.className='ggskin ggskin_textdiv';
		this._tt_panonext_white.ggTextDiv=this._tt_panonext_white__text;
		this._tt_panonext_white.ggId="tt_panonext_white";
		this._tt_panonext_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_panonext_white.ggVisible=true;
		this._tt_panonext_white.className='ggskin ggskin_text ';
		this._tt_panonext_white.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : -1px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : inherit;';
		hs+='width : 148px;';
		this._tt_panonext_white.setAttribute('style',hs);
		this._tt_panonext_white.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_panonext_white__text.setAttribute('style',hs);
		this._tt_panonext_white__text.innerHTML="Next Panorama";
		this._tt_panonext_white.appendChild(this._tt_panonext_white__text);
		me._tt_panonext_white.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._tt_panonext_white.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._tt_panonext_white.ggUpdatePosition=function () {
		}
		this._tt_panonext.appendChild(this._tt_panonext_white);
		this._pano_next.appendChild(this._tt_panonext);
		this._button_simplex_next_previous.appendChild(this._pano_next);
		this._controller.appendChild(this._button_simplex_next_previous);
		this.divSkin.appendChild(this._controller);
		this._loading=document.createElement('div');
		this._loading.ggId="loading";
		this._loading.ggLeft=-105;
		this._loading.ggTop=-30;
		this._loading.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._loading.ggVisible=true;
		this._loading.className='ggskin ggskin_container ';
		this._loading.ggType='container';
		hs ='';
		hs+='height : 60px;';
		hs+='left : -105px;';
		hs+='position : absolute;';
		hs+='top : -30px;';
		hs+='visibility : inherit;';
		hs+='width : 210px;';
		this._loading.setAttribute('style',hs);
		this._loading.style[domTransform + 'Origin']='50% 50%';
		me._loading.ggIsActive=function() {
			return false;
		}
		me._loading.ggElementNodeId=function() {
			return me.player.getCurrentNode();
		}
		this._loading.onclick=function () {
			me._loading.style[domTransition]='none';
			me._loading.style.visibility='hidden';
			me._loading.ggVisible=false;
		}
		this._loading.ggUpdatePosition=function () {
			this.style[domTransition]='none';
			if (this.parentNode) {
				var w=this.parentNode.offsetWidth;
					this.style.left=(this.ggLeft - 0 + w/2) + 'px';
				var h=this.parentNode.offsetHeight;
					this.style.top=(this.ggTop - 0 + h/2) + 'px';
			}
		}
		this._loadingbg=document.createElement('div');
		this._loadingbg.ggId="loadingbg";
		this._loadingbg.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._loadingbg.ggVisible=true;
		this._loadingbg.className='ggskin ggskin_rectangle ';
		this._loadingbg.ggType='rectangle';
		hs ='';
		hs+=cssPrefix + 'border-radius : 10px;';
		hs+='border-radius : 10px;';
		hs+='background : rgba(0,0,0,0.509804);';
		hs+='border : 2px solid #ffffff;';
		hs+='height : 58px;';
		hs+='left : -1px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : inherit;';
		hs+='width : 208px;';
		this._loadingbg.setAttribute('style',hs);
		this._loadingbg.style[domTransform + 'Origin']='50% 50%';
		me._loadingbg.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._loadingbg.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._loadingbg.ggUpdatePosition=function () {
		}
		this._loading.appendChild(this._loadingbg);
		this._loadingtext=document.createElement('div');
		this._loadingtext__text=document.createElement('div');
		this._loadingtext.className='ggskin ggskin_textdiv';
		this._loadingtext.ggTextDiv=this._loadingtext__text;
		this._loadingtext.ggId="loadingtext";
		this._loadingtext.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._loadingtext.ggVisible=true;
		this._loadingtext.className='ggskin ggskin_text ';
		this._loadingtext.ggType='text';
		hs ='';
		hs+='height : 23px;';
		hs+='left : 16px;';
		hs+='position : absolute;';
		hs+='top : 12px;';
		hs+='visibility : inherit;';
		hs+='width : 176px;';
		this._loadingtext.setAttribute('style',hs);
		this._loadingtext.style[domTransform + 'Origin']='0% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: auto;';
		hs+='height: auto;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: left;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._loadingtext__text.setAttribute('style',hs);
		this._loadingtext.ggUpdateText=function() {
			var hs="Loading... "+(me.player.getPercentLoaded()*100.0).toFixed(0)+"%";
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
				if (this.ggUpdatePosition) this.ggUpdatePosition();
			}
		}
		me._loadingtext.ggUpdateText();
		this._loadingtext.appendChild(this._loadingtext__text);
		me._loadingtext.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._loadingtext.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._loadingtext.ggUpdatePosition=function () {
		}
		this._loading.appendChild(this._loadingtext);
		this._loadingbar=document.createElement('div');
		this._loadingbar.ggId="loadingbar";
		this._loadingbar.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._loadingbar.ggVisible=true;
		this._loadingbar.className='ggskin ggskin_rectangle ';
		this._loadingbar.ggType='rectangle';
		hs ='';
		hs+=cssPrefix + 'border-radius : 5px;';
		hs+='border-radius : 5px;';
		hs+='background : #ffffff;';
		hs+='border : 1px solid #808080;';
		hs+='height : 12px;';
		hs+='left : 15px;';
		hs+='position : absolute;';
		hs+='top : 35px;';
		hs+='visibility : inherit;';
		hs+='width : 181px;';
		this._loadingbar.setAttribute('style',hs);
		this._loadingbar.style[domTransform + 'Origin']='0% 50%';
		me._loadingbar.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._loadingbar.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._loadingbar.ggUpdatePosition=function () {
		}
		this._loading.appendChild(this._loadingbar);
		this.divSkin.appendChild(this._loading);
		this._screentint=document.createElement('div');
		this._screentint.ggId="screentint";
		this._screentint.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._screentint.ggVisible=false;
		this._screentint.className='ggskin ggskin_rectangle ';
		this._screentint.ggType='rectangle';
		hs ='';
		hs+='background : rgba(0,0,0,0.509804);';
		hs+='border : 1px solid #000000;';
		hs+='height : 100%;';
		hs+='left : 0%;';
		hs+='position : absolute;';
		hs+='top : 0%;';
		hs+='visibility : hidden;';
		hs+='width : 100%;';
		this._screentint.setAttribute('style',hs);
		this._screentint.style[domTransform + 'Origin']='50% 50%';
		me._screentint.ggIsActive=function() {
			return false;
		}
		me._screentint.ggElementNodeId=function() {
			return me.player.getCurrentNode();
		}
		this._screentint.ggUpdatePosition=function () {
		}
		this.divSkin.appendChild(this._screentint);
		this._userdata=document.createElement('div');
		this._userdata.ggId="userdata";
		this._userdata.ggLeft=-120;
		this._userdata.ggTop=-80;
		this._userdata.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._userdata.ggVisible=false;
		this._userdata.className='ggskin ggskin_container ';
		this._userdata.ggType='container';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 140px;';
		hs+='left : -120px;';
		hs+='position : absolute;';
		hs+='top : -80px;';
		hs+='visibility : hidden;';
		hs+='width : 240px;';
		this._userdata.setAttribute('style',hs);
		this._userdata.style[domTransform + 'Origin']='50% 50%';
		me._userdata.ggIsActive=function() {
			return false;
		}
		me._userdata.ggElementNodeId=function() {
			return me.player.getCurrentNode();
		}
		this._userdata.ggUpdatePosition=function () {
			this.style[domTransition]='none';
			if (this.parentNode) {
				var w=this.parentNode.offsetWidth;
					this.style.left=(this.ggLeft - 0 + w/2) + 'px';
				var h=this.parentNode.offsetHeight;
					this.style.top=(this.ggTop - 0 + h/2) + 'px';
			}
		}
		this._userdatabg=document.createElement('div');
		this._userdatabg.ggId="userdatabg";
		this._userdatabg.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._userdatabg.ggVisible=true;
		this._userdatabg.className='ggskin ggskin_rectangle ';
		this._userdatabg.ggType='rectangle';
		hs ='';
		hs+=cssPrefix + 'border-radius : 10px;';
		hs+='border-radius : 10px;';
		hs+='background : rgba(0,0,0,0.509804);';
		hs+='border : 2px solid #ffffff;';
		hs+='height : 138px;';
		hs+='left : -1px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : inherit;';
		hs+='width : 238px;';
		this._userdatabg.setAttribute('style',hs);
		this._userdatabg.style[domTransform + 'Origin']='50% 50%';
		me._userdatabg.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._userdatabg.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._userdatabg.ggUpdatePosition=function () {
		}
		this._userdata.appendChild(this._userdatabg);
		this._title=document.createElement('div');
		this._title__text=document.createElement('div');
		this._title.className='ggskin ggskin_textdiv';
		this._title.ggTextDiv=this._title__text;
		this._title.ggId="title";
		this._title.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._title.ggVisible=true;
		this._title.className='ggskin ggskin_text ';
		this._title.ggType='text';
		hs ='';
		hs+='height : 20px;';
		hs+='left : 10px;';
		hs+='position : absolute;';
		hs+='top : 10px;';
		hs+='visibility : inherit;';
		hs+='width : 218px;';
		this._title.setAttribute('style',hs);
		this._title.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 218px;';
		hs+='height: 20px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: left;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._title__text.setAttribute('style',hs);
		this._title.ggUpdateText=function() {
			var hs="<b>"+me.ggUserdata.title+"<\/b>";
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
				if (this.ggUpdatePosition) this.ggUpdatePosition();
			}
		}
		me._title.ggUpdateText();
		this._title.appendChild(this._title__text);
		me._title.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._title.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._title.ggUpdatePosition=function () {
		}
		this._userdata.appendChild(this._title);
		this._description=document.createElement('div');
		this._description__text=document.createElement('div');
		this._description.className='ggskin ggskin_textdiv';
		this._description.ggTextDiv=this._description__text;
		this._description.ggId="description";
		this._description.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._description.ggVisible=true;
		this._description.className='ggskin ggskin_text ';
		this._description.ggType='text';
		hs ='';
		hs+='height : 20px;';
		hs+='left : 10px;';
		hs+='position : absolute;';
		hs+='top : 30px;';
		hs+='visibility : inherit;';
		hs+='width : 218px;';
		this._description.setAttribute('style',hs);
		this._description.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 218px;';
		hs+='height: 20px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: left;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._description__text.setAttribute('style',hs);
		this._description.ggUpdateText=function() {
			var hs=me.ggUserdata.description;
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
				if (this.ggUpdatePosition) this.ggUpdatePosition();
			}
		}
		me._description.ggUpdateText();
		this._description.appendChild(this._description__text);
		me._description.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._description.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._description.ggUpdatePosition=function () {
		}
		this._userdata.appendChild(this._description);
		this._author=document.createElement('div');
		this._author__text=document.createElement('div');
		this._author.className='ggskin ggskin_textdiv';
		this._author.ggTextDiv=this._author__text;
		this._author.ggId="author";
		this._author.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._author.ggVisible=true;
		this._author.className='ggskin ggskin_text ';
		this._author.ggType='text';
		hs ='';
		hs+='height : 20px;';
		hs+='left : 10px;';
		hs+='position : absolute;';
		hs+='top : 50px;';
		hs+='visibility : inherit;';
		hs+='width : 218px;';
		this._author.setAttribute('style',hs);
		this._author.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 218px;';
		hs+='height: 20px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: left;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._author__text.setAttribute('style',hs);
		this._author.ggUpdateText=function() {
			var hs=me.ggUserdata.author;
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
				if (this.ggUpdatePosition) this.ggUpdatePosition();
			}
		}
		me._author.ggUpdateText();
		this._author.appendChild(this._author__text);
		me._author.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._author.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._author.ggUpdatePosition=function () {
		}
		this._userdata.appendChild(this._author);
		this._datetime=document.createElement('div');
		this._datetime__text=document.createElement('div');
		this._datetime.className='ggskin ggskin_textdiv';
		this._datetime.ggTextDiv=this._datetime__text;
		this._datetime.ggId="datetime";
		this._datetime.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._datetime.ggVisible=true;
		this._datetime.className='ggskin ggskin_text ';
		this._datetime.ggType='text';
		hs ='';
		hs+='height : 23px;';
		hs+='left : 10px;';
		hs+='position : absolute;';
		hs+='top : 70px;';
		hs+='visibility : inherit;';
		hs+='width : 218px;';
		this._datetime.setAttribute('style',hs);
		this._datetime.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: auto;';
		hs+='height: auto;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: left;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._datetime__text.setAttribute('style',hs);
		this._datetime.ggUpdateText=function() {
			var hs=me.ggUserdata.datetime;
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
				if (this.ggUpdatePosition) this.ggUpdatePosition();
			}
		}
		me._datetime.ggUpdateText();
		this._datetime.appendChild(this._datetime__text);
		me._datetime.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._datetime.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._datetime.ggUpdatePosition=function () {
		}
		this._userdata.appendChild(this._datetime);
		this._copyright=document.createElement('div');
		this._copyright__text=document.createElement('div');
		this._copyright.className='ggskin ggskin_textdiv';
		this._copyright.ggTextDiv=this._copyright__text;
		this._copyright.ggId="copyright";
		this._copyright.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._copyright.ggVisible=true;
		this._copyright.className='ggskin ggskin_text ';
		this._copyright.ggType='text';
		hs ='';
		hs+='height : 23px;';
		hs+='left : 10px;';
		hs+='position : absolute;';
		hs+='top : 110px;';
		hs+='visibility : inherit;';
		hs+='width : 218px;';
		this._copyright.setAttribute('style',hs);
		this._copyright.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: auto;';
		hs+='height: auto;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: left;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._copyright__text.setAttribute('style',hs);
		this._copyright.ggUpdateText=function() {
			var hs="&#169; "+me.ggUserdata.copyright;
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
				if (this.ggUpdatePosition) this.ggUpdatePosition();
			}
		}
		me._copyright.ggUpdateText();
		this._copyright.appendChild(this._copyright__text);
		me._copyright.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._copyright.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._copyright.ggUpdatePosition=function () {
		}
		this._userdata.appendChild(this._copyright);
		this._userdata_close=document.createElement('div');
		this._userdata_close__img=document.createElement('img');
		this._userdata_close__img.className='ggskin ggskin_svg';
		this._userdata_close__img.setAttribute('src',basePath + 'images/userdata_close.svg');
		this._userdata_close__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._userdata_close__img['ondragstart']=function() { return false; };
		this._userdata_close.appendChild(this._userdata_close__img);
		this._userdata_close__imgo=document.createElement('img');
		this._userdata_close__imgo.className='ggskin ggskin_svg';
		this._userdata_close__imgo.setAttribute('src',basePath + 'images/userdata_close__o.svg');
		this._userdata_close__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._userdata_close__imgo['ondragstart']=function() { return false; };
		this._userdata_close.appendChild(this._userdata_close__imgo);
		this._userdata_close.ggId="userdata_close";
		this._userdata_close.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._userdata_close.ggVisible=true;
		this._userdata_close.className='ggskin ggskin_svg ';
		this._userdata_close.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : 207px;';
		hs+='position : absolute;';
		hs+='top : 1px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._userdata_close.setAttribute('style',hs);
		this._userdata_close.style[domTransform + 'Origin']='50% 50%';
		me._userdata_close.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._userdata_close.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._userdata_close.onclick=function () {
			me._userdata.style[domTransition]='none';
			me._userdata.style.visibility='hidden';
			me._userdata.ggVisible=false;
			me._screentint.style[domTransition]='none';
			me._screentint.style.visibility='hidden';
			me._screentint.ggVisible=false;
		}
		this._userdata_close.onmouseover=function () {
			me._userdata_close__img.style.visibility='hidden';
			me._userdata_close__imgo.style.visibility='inherit';
		}
		this._userdata_close.onmouseout=function () {
			me._userdata_close__img.style.visibility='inherit';
			me._userdata_close__imgo.style.visibility='hidden';
		}
		this._userdata_close.ggUpdatePosition=function () {
		}
		this._userdata.appendChild(this._userdata_close);
		this.divSkin.appendChild(this._userdata);
		this._information=document.createElement('div');
		this._information.ggId="information";
		this._information.ggLeft=-148;
		this._information.ggTop=-150;
		this._information.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._information.ggVisible=false;
		this._information.className='ggskin ggskin_container ';
		this._information.ggType='container';
		hs ='';
		hs+='height : 250px;';
		hs+='left : -148px;';
		hs+='position : absolute;';
		hs+='top : -150px;';
		hs+='visibility : hidden;';
		hs+='width : 300px;';
		this._information.setAttribute('style',hs);
		this._information.style[domTransform + 'Origin']='50% 50%';
		me._information.ggIsActive=function() {
			return false;
		}
		me._information.ggElementNodeId=function() {
			return me.player.getCurrentNode();
		}
		this._information.ggUpdatePosition=function () {
			this.style[domTransition]='none';
			if (this.parentNode) {
				var w=this.parentNode.offsetWidth;
					this.style.left=(this.ggLeft - 0 + w/2) + 'px';
				var h=this.parentNode.offsetHeight;
					this.style.top=(this.ggTop - 0 + h/2) + 'px';
			}
		}
		this._informationbg=document.createElement('div');
		this._informationbg.ggId="informationbg";
		this._informationbg.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._informationbg.ggVisible=true;
		this._informationbg.className='ggskin ggskin_rectangle ';
		this._informationbg.ggType='rectangle';
		hs ='';
		hs+=cssPrefix + 'border-radius : 10px;';
		hs+='border-radius : 10px;';
		hs+='background : rgba(0,0,0,0.784314);';
		hs+='border : 2px solid #ffffff;';
		hs+='height : 248px;';
		hs+='left : -1px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : inherit;';
		hs+='width : 298px;';
		this._informationbg.setAttribute('style',hs);
		this._informationbg.style[domTransform + 'Origin']='50% 50%';
		me._informationbg.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._informationbg.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._informationbg.ggUpdatePosition=function () {
		}
		this._information.appendChild(this._informationbg);
		this._info_text_body=document.createElement('div');
		this._info_text_body__text=document.createElement('div');
		this._info_text_body.className='ggskin ggskin_textdiv';
		this._info_text_body.ggTextDiv=this._info_text_body__text;
		this._info_text_body.ggId="info_text_body";
		this._info_text_body.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._info_text_body.ggVisible=true;
		this._info_text_body.className='ggskin ggskin_text ';
		this._info_text_body.ggType='text';
		hs ='';
		hs+='height : 193px;';
		hs+='left : 12px;';
		hs+='position : absolute;';
		hs+='top : 45px;';
		hs+='visibility : inherit;';
		hs+='width : 274px;';
		this._info_text_body.setAttribute('style',hs);
		this._info_text_body.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 274px;';
		hs+='height: 193px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: left;';
		hs+='white-space: pre-wrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		hs+='overflow-y: auto;';
		this._info_text_body__text.setAttribute('style',hs);
		this._info_text_body__text.innerHTML="";
		this._info_text_body.appendChild(this._info_text_body__text);
		me._info_text_body.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._info_text_body.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._info_text_body.ggUpdatePosition=function () {
		}
		this._information.appendChild(this._info_text_body);
		this._info_title=document.createElement('div');
		this._info_title__text=document.createElement('div');
		this._info_title.className='ggskin ggskin_textdiv';
		this._info_title.ggTextDiv=this._info_title__text;
		this._info_title.ggId="info_title";
		this._info_title.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._info_title.ggVisible=true;
		this._info_title.className='ggskin ggskin_text ';
		this._info_title.ggType='text';
		hs ='';
		hs+='height : 18px;';
		hs+='left : 103px;';
		hs+='position : absolute;';
		hs+='top : 15px;';
		hs+='visibility : inherit;';
		hs+='width : 99px;';
		this._info_title.setAttribute('style',hs);
		this._info_title.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 99px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._info_title__text.setAttribute('style',hs);
		this._info_title__text.innerHTML="";
		this._info_title.appendChild(this._info_title__text);
		me._info_title.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._info_title.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._info_title.ggUpdatePosition=function () {
		}
		this._information.appendChild(this._info_title);
		this._ht_info_close=document.createElement('div');
		this._ht_info_close__img=document.createElement('img');
		this._ht_info_close__img.className='ggskin ggskin_svg';
		this._ht_info_close__img.setAttribute('src',basePath + 'images/ht_info_close.svg');
		this._ht_info_close__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._ht_info_close__img['ondragstart']=function() { return false; };
		this._ht_info_close.appendChild(this._ht_info_close__img);
		this._ht_info_close__imgo=document.createElement('img');
		this._ht_info_close__imgo.className='ggskin ggskin_svg';
		this._ht_info_close__imgo.setAttribute('src',basePath + 'images/ht_info_close__o.svg');
		this._ht_info_close__imgo.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;visibility:hidden;pointer-events:none;');
		this._ht_info_close__imgo['ondragstart']=function() { return false; };
		this._ht_info_close.appendChild(this._ht_info_close__imgo);
		this._ht_info_close.ggId="ht_info_close";
		this._ht_info_close.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._ht_info_close.ggVisible=true;
		this._ht_info_close.className='ggskin ggskin_svg ';
		this._ht_info_close.ggType='svg';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 32px;';
		hs+='left : 263px;';
		hs+='position : absolute;';
		hs+='top : 4px;';
		hs+='visibility : inherit;';
		hs+='width : 32px;';
		this._ht_info_close.setAttribute('style',hs);
		this._ht_info_close.style[domTransform + 'Origin']='50% 50%';
		me._ht_info_close.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._ht_info_close.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._ht_info_close.onclick=function () {
			me._information.style[domTransition]='none';
			me._information.style.visibility='hidden';
			me._information.ggVisible=false;
			me._screentint.style[domTransition]='none';
			me._screentint.style.visibility='hidden';
			me._screentint.ggVisible=false;
		}
		this._ht_info_close.onmouseover=function () {
			me._ht_info_close__img.style.visibility='hidden';
			me._ht_info_close__imgo.style.visibility='inherit';
		}
		this._ht_info_close.onmouseout=function () {
			me._ht_info_close__img.style.visibility='inherit';
			me._ht_info_close__imgo.style.visibility='hidden';
		}
		this._ht_info_close.ggUpdatePosition=function () {
		}
		this._information.appendChild(this._ht_info_close);
		this.divSkin.appendChild(this._information);
		this._image_popup=document.createElement('div');
		this._image_popup.ggId="image_popup";
		this._image_popup.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_popup.ggVisible=false;
		this._image_popup.className='ggskin ggskin_container ';
		this._image_popup.ggType='container';
		hs ='';
		hs+='height : 80%;';
		hs+='left : 10%;';
		hs+='position : absolute;';
		hs+='top : 10%;';
		hs+='visibility : hidden;';
		hs+='width : 80%;';
		this._image_popup.setAttribute('style',hs);
		this._image_popup.style[domTransform + 'Origin']='50% 50%';
		me._image_popup.ggIsActive=function() {
			return false;
		}
		me._image_popup.ggElementNodeId=function() {
			return me.player.getCurrentNode();
		}
		this._image_popup.onclick=function () {
			me._image_popup.style[domTransition]='none';
			me._image_popup.style.visibility='hidden';
			me._image_popup.ggVisible=false;
			me._popup_image.ggText="";
			me._popup_image__img.src=me._popup_image.ggText;
			me._screentint.style[domTransition]='none';
			me._screentint.style.visibility='hidden';
			me._screentint.ggVisible=false;
		}
		this._image_popup.ggUpdatePosition=function () {
		}
		this._loading_image=document.createElement('div');
		this._loading_image__img=document.createElement('img');
		this._loading_image__img.className='ggskin ggskin_svg';
		this._loading_image__img.setAttribute('src',basePath + 'images/loading_image.svg');
		this._loading_image__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._loading_image__img['ondragstart']=function() { return false; };
		this._loading_image.appendChild(this._loading_image__img);
		this._loading_image.ggId="loading_image";
		this._loading_image.ggLeft=-20;
		this._loading_image.ggTop=-20;
		this._loading_image.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._loading_image.ggVisible=true;
		this._loading_image.className='ggskin ggskin_svg ';
		this._loading_image.ggType='svg';
		hs ='';
		hs+='height : 40px;';
		hs+='left : -20px;';
		hs+='position : absolute;';
		hs+='top : -20px;';
		hs+='visibility : inherit;';
		hs+='width : 40px;';
		this._loading_image.setAttribute('style',hs);
		this._loading_image.style[domTransform + 'Origin']='50% 50%';
		me._loading_image.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._loading_image.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._loading_image.ggUpdatePosition=function () {
			this.style[domTransition]='none';
			if (this.parentNode) {
				var w=this.parentNode.offsetWidth;
					this.style.left=(this.ggLeft - 0 + w/2) + 'px';
				var h=this.parentNode.offsetHeight;
					this.style.top=(this.ggTop - 0 + h/2) + 'px';
			}
		}
		this._image_popup.appendChild(this._loading_image);
		this._popup_image=document.createElement('div');
		this._popup_image__img=document.createElement('img');
		this._popup_image__img.className='ggskin ggskin_external';
		this._popup_image__img.onload=function() {me._popup_image.ggUpdatePosition();}
		this._popup_image__img.setAttribute('src',basePath + '');
		this._popup_image__img['ondragstart']=function() { return false; };
		hs ='';
		this._popup_image.appendChild(this._popup_image__img);
		this._popup_image.ggId="popup_image";
		this._popup_image.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._popup_image.ggVisible=true;
		this._popup_image.className='ggskin ggskin_external ';
		this._popup_image.ggType='external';
		hs ='';
		hs+='border : 0px solid #000000;';
		hs+='cursor : pointer;';
		hs+='height : 100%;';
		hs+='left : 0%;';
		hs+='position : absolute;';
		hs+='top : 0%;';
		hs+='visibility : inherit;';
		hs+='width : 100%;';
		this._popup_image.setAttribute('style',hs);
		this._popup_image.style[domTransform + 'Origin']='50% 50%';
		me._popup_image.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._popup_image.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._popup_image.ggUpdatePosition=function () {
			var parentWidth = me._popup_image.clientWidth;
			var parentHeight = me._popup_image.clientHeight;
			var aspectRatioDiv = me._popup_image.clientWidth / me._popup_image.clientHeight;
			var aspectRatioImg = me._popup_image__img.naturalWidth / me._popup_image__img.naturalHeight;
			if (me._popup_image__img.naturalWidth < parentWidth) parentWidth = me._popup_image__img.naturalWidth;
			if (me._popup_image__img.naturalHeight < parentHeight) parentHeight = me._popup_image__img.naturalHeight;
			var currentWidth = me._popup_image__img.naturalWidth;
			var currentHeight = me._popup_image__img.naturalHeight;
			if (aspectRatioDiv > aspectRatioImg) {
			currentHeight = parentHeight;
			currentWidth = parentHeight * aspectRatioImg;
			me._popup_image__img.setAttribute('style','position: absolute; left: 50%; margin-left: -' + currentWidth/2 + 'px; top: 50%; margin-top: -' + currentHeight/2 + 'px;height:' + parentHeight + 'px;-webkit-user-drag:none;pointer-events:none;');
			} else {
			currentWidth = parentWidth;
			currentHeight = parentWidth / aspectRatioImg;
			me._popup_image__img.setAttribute('style','position: absolute; left: 50%; margin-left: -' + currentWidth/2 + 'px; top: 50%; margin-top: -' + currentHeight/2 + 'px;width:' + parentWidth + 'px;-webkit-user-drag:none;pointer-events:none;');
			};
		}
		this._image_popup.appendChild(this._popup_image);
		this.divSkin.appendChild(this._image_popup);
		this._thumbnail_menu=document.createElement('div');
		this._thumbnail_menu__content=document.createElement('div');
		this._thumbnail_menu.ggContent=this._thumbnail_menu__content;
		this._thumbnail_menu.appendChild(this._thumbnail_menu__content);
		hs ='';
		hs+='background : rgba(163,163,163,0.784314);';
		hs+='left : 0px;';
		hs+='overflow : visible;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		this._thumbnail_menu__content.setAttribute('style',hs);
		this._thumbnail_menu.ggId="Thumbnail Menu";
		this._thumbnail_menu.ggTop=-86;
		this._thumbnail_menu.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._thumbnail_menu.ggVisible=true;
		this._thumbnail_menu.className='ggskin ggskin_scrollarea ';
		this._thumbnail_menu.ggType='scrollarea';
		hs ='';
		hs+='-webkit-overflow-scrolling : touch;';
		hs+='background : rgba(163,163,163,0.784314);';
		hs+='border : 1px solid #ffffff;';
		hs+='height : 84px;';
		hs+='left : 20.34%;';
		hs+='overflow-x : auto;';
		hs+='overflow-y : auto;';
		hs+='position : absolute;';
		hs+='top : -86px;';
		hs+='visibility : inherit;';
		hs+='width : 60%;';
		hs+='border-radius: 5px;';
		this._thumbnail_menu.setAttribute('style',hs);
		this._thumbnail_menu.style[domTransform + 'Origin']='50% 50%';
		me._thumbnail_menu.ggIsActive=function() {
			return false;
		}
		me._thumbnail_menu.ggElementNodeId=function() {
			return me.player.getCurrentNode();
		}
		this._thumbnail_menu.ggUpdatePosition=function () {
			this.style[domTransition]='none';
			if (this.parentNode) {
				var h=this.parentNode.offsetHeight;
					this.style.top=(this.ggTop - 0 + h) + 'px';
			}
			{
				this.ggContent.style.left = '0px';
				this.ggContent.style.marginLeft = '0px';
				this.ggContent.style.top = '0px';
				this.ggContent.style.marginTop = '0px';
			}
		}
		this._thumbnail_cloner=document.createElement('div');
		this._thumbnail_cloner.ggNumRepeat = 1;
		this._thumbnail_cloner.ggWidth = 98;
		this._thumbnail_cloner.ggHeight = 60;
		this._thumbnail_cloner.ggUpdating = false;
		this._thumbnail_cloner.ggFilter = [];
		this._thumbnail_cloner.ggUpdate = function(filter) {
			if(me._thumbnail_cloner.ggUpdating == true) return;
			me._thumbnail_cloner.ggUpdating = true;
			if (typeof filter=='object') {
				me._thumbnail_cloner.ggFilter = filter;
			} else {
				filter = me._thumbnail_cloner.ggFilter;
			};
			if (me._thumbnail_cloner.hasChildNodes() == true) {
				while (me._thumbnail_cloner.firstChild) {
					me._thumbnail_cloner.removeChild(me._thumbnail_cloner.firstChild);
				}
			}
			var tourNodes = me.player.getNodeIds();
			var row = 0;
			var column = 0;
			var numRows = me._thumbnail_cloner.ggNumRepeat;
			if (numRows < 1) numRows = 1;
			for (i=0; i < tourNodes.length; i++) {
				var nodeId = tourNodes[i];
				var passed = false;
				if (filter.length > 0) {
					var nodeData = me.player.getNodeUserdata(nodeId);
					for (j=0; j < filter.length; j++) {
						if (nodeData['tags'].indexOf(filter[j]) != -1) passed = true;
					}
				}
				else passed = true;
				if (passed) {
					me._thumbnail_cloner__node = document.createElement('div');
					me._thumbnail_cloner.appendChild(me._thumbnail_cloner__node);
					me._thumbnail_cloner__node.setAttribute('style','position: absolute; top: ' + (row * me._thumbnail_cloner.ggHeight) + 'px; left:' + (column * me._thumbnail_cloner.ggWidth) + 'px; height: ' + me._thumbnail_cloner.ggHeight + 'px; width: ' + me._thumbnail_cloner.ggWidth + 'px; overflow: hidden;');
					var inst = new SkinCloner_thumbnail_cloner_Class(nodeId, me);
					me._thumbnail_cloner__node.appendChild(inst.__div);
					me._thumbnail_cloner__node.ggObj=inst;
					me.updateSize(inst.__div);
					row++;
					if (row >= numRows) {
						row = 0;
						column++;
					}
				}
			}
			me._thumbnail_cloner.ggClonerCallChildFunctions('ggUpdateConditionTimer');
			me._thumbnail_cloner.ggUpdating = false;
		}
		this._thumbnail_cloner.ggClonerCallChildFunctions = function(functionname){
			var stack = [];
			var i;
			for(i=0; i<me._thumbnail_cloner.childNodes.length; i++) {
				stack.push(me._thumbnail_cloner.childNodes[i]);
			}
			while (stack.length > 0) {
				var e = stack.pop();
				if (typeof e[functionname] == 'function')
					e[functionname]();
				if(e.hasChildNodes()) {
					for(i=0; i<e.childNodes.length; i++) {
						stack.push(e.childNodes[i]);
					}
				}
			}
		}
		this._thumbnail_cloner.ggTags = [];
		this._thumbnail_cloner.ggId="Thumbnail Cloner";
		this._thumbnail_cloner.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._thumbnail_cloner.ggVisible=true;
		this._thumbnail_cloner.className='ggskin ggskin_cloner ';
		this._thumbnail_cloner.ggType='cloner';
		hs ='';
		hs+='height : 59px;';
		hs+='left : 1px;';
		hs+='overflow : visible;';
		hs+='position : absolute;';
		hs+='top : 3px;';
		hs+='visibility : inherit;';
		hs+='width : 97px;';
		this._thumbnail_cloner.setAttribute('style',hs);
		this._thumbnail_cloner.style[domTransform + 'Origin']='50% 50%';
		me._thumbnail_cloner.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._thumbnail_cloner.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._thumbnail_cloner.ggUpdateConditionNodeChange=function () {
			var cnode=me.player.getCurrentNode();
			for(var i=0; i<me._thumbnail_cloner.childNodes.length; i++) {
				var child=me._thumbnail_cloner.childNodes[i];
				if (child.ggObj && child.ggObj.ggNodeId==cnode) {
			        var childOffX = child.offsetLeft;
			        var childOffY = child.offsetTop;
					var p = child.parentElement;
			        while (p != null && p!==this.divSkin) {
						if (p.ggType && p.ggType == 'scrollarea') {
							if ((p.scrollLeft + p.clientWidth) < (childOffX + child.clientWidth)) {
								p.scrollLeft = (childOffX + child.clientWidth) - p.clientWidth;
							}
							if ((p.scrollTop + p.clientHeight) < (childOffY + child.clientHeight)) {
								p.scrollTop = (childOffY + child.clientHeight) - p.clientHeight;
							}
							if (childOffX < p.scrollLeft) {
								p.scrollLeft = childOffX;
							}
							if (childOffY < p.scrollTop) {
								p.scrollTop = childOffY;
							}
						}
						childOffX += p.offsetLeft;
						childOffY += p.offsetTop;
						p = p.parentElement;
					}
				}
			}
		}
		this._thumbnail_cloner.ggUpdatePosition=function () {
			var w=me.player.getViewerSize().width;
			var h=me.player.getViewerSize().height
			if ((!me._thumbnail_cloner.ggLastSize) || (me._thumbnail_cloner.ggLastSize.w!=w) || (me._thumbnail_cloner.ggLastSize.h!=h)) {
				me._thumbnail_cloner.ggLastSize={ w:w, h:h };
				me._thumbnail_cloner.ggUpdate();
			}
		}
		this._thumbnail_cloner.ggNodeChange=function () {
			me._thumbnail_cloner.ggUpdateConditionNodeChange();
		}
		this._thumbnail_menu__content.appendChild(this._thumbnail_cloner);
		this.divSkin.appendChild(this._thumbnail_menu);
		this.divSkin.ggUpdateSize=function(w,h) {
			me.updateSize(me.divSkin);
		}
		this.divSkin.ggViewerInit=function() {
			me._thumbnail_cloner.ggUpdate(me._thumbnail_cloner.ggTags);
		}
		this.divSkin.ggLoaded=function() {
			me._loading.style[domTransition]='none';
			me._loading.style.visibility='hidden';
			me._loading.ggVisible=false;
		}
		this.divSkin.ggReLoaded=function() {
			me._loading.style[domTransition]='none';
			me._loading.style.visibility=(Number(me._loading.style.opacity)>0||!me._loading.style.opacity)?'inherit':'hidden';
			me._loading.ggVisible=true;
		}
		this.divSkin.ggLoadedLevels=function() {
		}
		this.divSkin.ggReLoadedLevels=function() {
		}
		this.divSkin.ggEnterFullscreen=function() {
		}
		this.divSkin.ggExitFullscreen=function() {
		}
		this.skinTimerEvent();
	};
	this.hotspotProxyClick=function(id) {
	}
	this.hotspotProxyOver=function(id) {
	}
	this.hotspotProxyOut=function(id) {
	}
	this.ggHotspotCallChildFunctions=function(functionname) {
		var stack = me.player.getCurrentPointHotspots();
		while (stack.length > 0) {
			var e = stack.pop();
			if (typeof e[functionname] == 'function') {
				e[functionname]();
			}
			if(e.hasChildNodes()) {
				for(var i=0; i<e.childNodes.length; i++) {
					stack.push(e.childNodes[i]);
				}
			}
		}
	}
	this.changeActiveNode=function(id) {
		me.ggUserdata=me.player.userdata;
		me._button_simplex_fullscreen.ggNodeChange();
		me._thumbnail_cloner.ggNodeChange();
		me.ggHotspotCallChildFunctions('ggNodeChange');
	}
	this.skinTimerEvent=function() {
		setTimeout(function() { me.skinTimerEvent(); }, 10);
		me.ggCurrentTime=new Date().getTime();
		me._controller.ggUpdateConditionTimer();
		if (me.elementMouseDown['up']) {
			me.player.changeTiltLog(1,true);
		}
		me._up.ggUpdateConditionTimer();
		if (me.elementMouseDown['down']) {
			me.player.changeTiltLog(-1,true);
		}
		me._down.ggUpdateConditionTimer();
		if (me.elementMouseDown['left']) {
			me.player.changePanLog(1,true);
		}
		me._left.ggUpdateConditionTimer();
		if (me.elementMouseDown['right']) {
			me.player.changePanLog(-1,true);
		}
		me._right.ggUpdateConditionTimer();
		if (me.elementMouseDown['zoomin']) {
			me.player.changeFovLog(-1,true);
		}
		if (me.elementMouseOver['zoomin']) {
		}
		me._tt_zoomin.ggUpdateConditionTimer();
		if (me.elementMouseDown['zoomout']) {
			me.player.changeFovLog(1,true);
		}
		if (me.elementMouseOver['zoomout']) {
		}
		me._tt_zoomout.ggUpdateConditionTimer();
		if (me.elementMouseOver['button_stop_auto_rotate']) {
		}
		me._tt_stop_auto_rotate.ggUpdateConditionTimer();
		if (me.elementMouseOver['button_start_auto_rotate']) {
		}
		me._tt_start_auto_rotate.ggUpdateConditionTimer();
		if (me.elementMouseOver['button_image_normalscreen']) {
		}
		me._tt_exit_fullscreen.ggUpdateConditionTimer();
		if (me.elementMouseOver['button_image_fullscreen']) {
		}
		me._tt_enter_fullscreen.ggUpdateConditionTimer();
		if (me.elementMouseOver['pano_prev']) {
		}
		me._tt_panoprev.ggUpdateConditionTimer();
		if (me.elementMouseOver['pano_next']) {
		}
		me._tt_panonext.ggUpdateConditionTimer();
		me._loadingtext.ggUpdateText();
		var hs='';
		if (me._loadingbar.ggParameter) {
			hs+=parameterToTransform(me._loadingbar.ggParameter) + ' ';
		}
		hs+='scale(' + (1 * me.player.getPercentLoaded() + 0) + ',1.0) ';
		me._loadingbar.style[domTransform]=hs;
		me._title.ggUpdateText();
		me._description.ggUpdateText();
		me._author.ggUpdateText();
		me._datetime.ggUpdateText();
		me._copyright.ggUpdateText();
		me._thumbnail_cloner.ggClonerCallChildFunctions('ggUpdateConditionTimer');
		me.ggHotspotCallChildFunctions('ggUpdateConditionTimer');
	};
	function SkinHotspotClass(skinObj,hotspot) {
		var me=this;
		var flag=false;
		this.player=skinObj.player;
		this.skin=skinObj;
		this.hotspot=hotspot;
		var nodeId=String(hotspot.url);
		nodeId=(nodeId.charAt(0)=='{')?nodeId.substr(1, nodeId.length - 2):'';
		this.ggUserdata=this.skin.player.getNodeUserdata(nodeId);
		this.elementMouseDown=[];
		this.elementMouseOver=[];
		
		this.findElements=function(id,regex) {
			return me.skin.findElements(id,regex);
		}
		
		if (hotspot.skinid=='ht_node') {
			this.__div=document.createElement('div');
			this.__div.ggId="ht_node";
			this.__div.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this.__div.ggVisible=true;
			this.__div.className='ggskin ggskin_hotspot ';
			this.__div.ggType='hotspot';
			hs ='';
			hs+='height : 5px;';
			hs+='left : 100px;';
			hs+='position : absolute;';
			hs+='top : 140px;';
			hs+='visibility : inherit;';
			hs+='width : 5px;';
			this.__div.setAttribute('style',hs);
			this.__div.style[domTransform + 'Origin']='50% 50%';
			me.__div.ggIsActive=function() {
				return me.player.getCurrentNode()==this.ggElementNodeId();
			}
			me.__div.ggElementNodeId=function() {
				return me.hotspot.url.substr(1, me.hotspot.url.length - 2);
			}
			this.__div.onclick=function () {
				me.player.openUrl(me.hotspot.url,me.hotspot.target);
				me.skin.hotspotProxyClick(me.hotspot.id);
			}
			this.__div.onmouseover=function () {
				me.player.setActiveHotspot(me.hotspot);
				me.elementMouseOver['_div']=true;
				me.skin.hotspotProxyOver(me.hotspot.id);
			}
			this.__div.onmouseout=function () {
				me.player.setActiveHotspot(null);
				me.elementMouseOver['_div']=false;
				me.skin.hotspotProxyOut(me.hotspot.id);
			}
			this.__div.ontouchend=function () {
				me.elementMouseOver['_div']=false;
			}
			this.__div.ggUpdatePosition=function () {
			}
			this._hsimage_node=document.createElement('div');
			this._hsimage_node__img=document.createElement('img');
			this._hsimage_node__img.className='ggskin ggskin_svg';
			this._hsimage_node__img.setAttribute('src',basePath + 'images/hsimage_node.svg');
			this._hsimage_node__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
			this._hsimage_node__img['ondragstart']=function() { return false; };
			this._hsimage_node.appendChild(this._hsimage_node__img);
			this._hsimage_node.ggId="hsimage_node";
			this._hsimage_node.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._hsimage_node.ggVisible=true;
			this._hsimage_node.className='ggskin ggskin_svg ';
			this._hsimage_node.ggType='svg';
			hs ='';
			hs+='cursor : pointer;';
			hs+='height : 32px;';
			hs+='left : -16px;';
			hs+='position : absolute;';
			hs+='top : -16px;';
			hs+='visibility : inherit;';
			hs+='width : 32px;';
			this._hsimage_node.setAttribute('style',hs);
			this._hsimage_node.style[domTransform + 'Origin']='50% 50%';
			me._hsimage_node.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._hsimage_node.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			this._hsimage_node.ggUpdatePosition=function () {
			}
			this.__div.appendChild(this._hsimage_node);
			this._hotspot_preview=document.createElement('div');
			this._hotspot_preview.ggId="hotspot_preview";
			this._hotspot_preview.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._hotspot_preview.ggVisible=false;
			this._hotspot_preview.className='ggskin ggskin_container ';
			this._hotspot_preview.ggType='container';
			hs ='';
			hs+='height : 103px;';
			hs+='left : -73px;';
			hs+='position : absolute;';
			hs+='top : -128px;';
			hs+='visibility : hidden;';
			hs+='width : 153px;';
			this._hotspot_preview.setAttribute('style',hs);
			this._hotspot_preview.style[domTransform + 'Origin']='50% 50%';
			me._hotspot_preview.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._hotspot_preview.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			me._hotspot_preview.ggCurrentLogicStateVisible = -1;
			this._hotspot_preview.ggUpdateConditionTimer=function () {
				var newLogicStateVisible;
				if (
					(me.elementMouseOver['_div'] == true)
				)
				{
					newLogicStateVisible = 0;
				}
				else {
					newLogicStateVisible = -1;
				}
				if (me._hotspot_preview.ggCurrentLogicStateVisible != newLogicStateVisible) {
					me._hotspot_preview.ggCurrentLogicStateVisible = newLogicStateVisible;
					me._hotspot_preview.style[domTransition]='';
					if (me._hotspot_preview.ggCurrentLogicStateVisible == 0) {
						me._hotspot_preview.style.visibility=(Number(me._hotspot_preview.style.opacity)>0||!me._hotspot_preview.style.opacity)?'inherit':'hidden';
						me._hotspot_preview.ggVisible=true;
					}
					else {
						me._hotspot_preview.style.visibility="hidden";
						me._hotspot_preview.ggVisible=false;
					}
				}
			}
			this._hotspot_preview.ggUpdatePosition=function () {
			}
			this._preview_picture_frame_=document.createElement('div');
			this._preview_picture_frame_.ggId="preview_picture_frame ";
			this._preview_picture_frame_.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._preview_picture_frame_.ggVisible=true;
			this._preview_picture_frame_.className='ggskin ggskin_rectangle ';
			this._preview_picture_frame_.ggType='rectangle';
			hs ='';
			hs+=cssPrefix + 'border-radius : 5px;';
			hs+='border-radius : 5px;';
			hs+='background : rgba(255,255,255,0.784314);';
			hs+='border : 1px solid #000000;';
			hs+='height : 99px;';
			hs+='left : 0px;';
			hs+='position : absolute;';
			hs+='top : 0px;';
			hs+='visibility : inherit;';
			hs+='width : 149px;';
			this._preview_picture_frame_.setAttribute('style',hs);
			this._preview_picture_frame_.style[domTransform + 'Origin']='50% 50%';
			me._preview_picture_frame_.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._preview_picture_frame_.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			this._preview_picture_frame_.ggUpdatePosition=function () {
			}
			this._hotspot_preview.appendChild(this._preview_picture_frame_);
			this._preview_nodeimage=document.createElement('div');
			this._preview_nodeimage__img=document.createElement('img');
			this._preview_nodeimage__img.className='ggskin ggskin_nodeimage';
			this._preview_nodeimage__img.setAttribute('src',basePath + "images/preview_nodeimage_" + nodeId + ".png");
			this._preview_nodeimage.ggNodeId=nodeId;
			this._preview_nodeimage__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
			this._preview_nodeimage__img.className='ggskin ggskin_nodeimage';
			this._preview_nodeimage__img['ondragstart']=function() { return false; };
			this._preview_nodeimage.appendChild(this._preview_nodeimage__img);
			this._preview_nodeimage.ggId="Preview NodeImage";
			this._preview_nodeimage.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._preview_nodeimage.ggVisible=true;
			this._preview_nodeimage.className='ggskin ggskin_nodeimage ';
			this._preview_nodeimage.ggType='nodeimage';
			hs ='';
			hs+='height : 90px;';
			hs+='left : 5px;';
			hs+='position : absolute;';
			hs+='top : 5px;';
			hs+='visibility : inherit;';
			hs+='width : 140px;';
			this._preview_nodeimage.setAttribute('style',hs);
			this._preview_nodeimage.style[domTransform + 'Origin']='50% 50%';
			me._preview_nodeimage.ggIsActive=function() {
				return me.player.getCurrentNode()==this.ggElementNodeId();
			}
			me._preview_nodeimage.ggElementNodeId=function() {
				return this.ggNodeId;
			}
			this._preview_nodeimage.ggUpdatePosition=function () {
			}
			this._hotspot_preview.appendChild(this._preview_nodeimage);
			this._tooltip_bg=document.createElement('div');
			this._tooltip_bg.ggId="tooltip_bg";
			this._tooltip_bg.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._tooltip_bg.ggVisible=true;
			this._tooltip_bg.className='ggskin ggskin_rectangle ';
			this._tooltip_bg.ggType='rectangle';
			hs ='';
			hs+='background : rgba(0,0,0,0.392157);';
			hs+='border : 0px solid #000000;';
			hs+='height : 20px;';
			hs+='left : 5px;';
			hs+='position : absolute;';
			hs+='top : 77px;';
			hs+='visibility : inherit;';
			hs+='width : 140px;';
			this._tooltip_bg.setAttribute('style',hs);
			this._tooltip_bg.style[domTransform + 'Origin']='50% 50%';
			me._tooltip_bg.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._tooltip_bg.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			this._tooltip_bg.ggUpdatePosition=function () {
			}
			this._hotspot_preview.appendChild(this._tooltip_bg);
			this._tooltip_drop_shadow=document.createElement('div');
			this._tooltip_drop_shadow__text=document.createElement('div');
			this._tooltip_drop_shadow.className='ggskin ggskin_textdiv';
			this._tooltip_drop_shadow.ggTextDiv=this._tooltip_drop_shadow__text;
			this._tooltip_drop_shadow.ggId="tooltip_drop_shadow";
			this._tooltip_drop_shadow.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._tooltip_drop_shadow.ggVisible=true;
			this._tooltip_drop_shadow.className='ggskin ggskin_text ';
			this._tooltip_drop_shadow.ggType='text';
			hs ='';
			hs+='height : 20px;';
			hs+='left : 1px;';
			hs+='position : absolute;';
			hs+='top : 80px;';
			hs+='visibility : inherit;';
			hs+='width : 148px;';
			this._tooltip_drop_shadow.setAttribute('style',hs);
			this._tooltip_drop_shadow.style[domTransform + 'Origin']='50% 50%';
			hs ='position:absolute;';
			hs+='left: 0px;';
			hs+='top:  0px;';
			hs+='width: 148px;';
			hs+='height: 20px;';
			hs+='border: 0px solid #000000;';
			hs+='color: rgba(0,0,0,1);';
			hs+='text-align: center;';
			hs+='white-space: nowrap;';
			hs+='padding: 0px 1px 0px 1px;';
			hs+='overflow: hidden;';
			this._tooltip_drop_shadow__text.setAttribute('style',hs);
			this._tooltip_drop_shadow__text.innerHTML=me.hotspot.title;
			this._tooltip_drop_shadow.appendChild(this._tooltip_drop_shadow__text);
			me._tooltip_drop_shadow.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._tooltip_drop_shadow.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			this._tooltip_drop_shadow.ggUpdatePosition=function () {
			}
			this._hotspot_preview.appendChild(this._tooltip_drop_shadow);
			this._tooltip=document.createElement('div');
			this._tooltip__text=document.createElement('div');
			this._tooltip.className='ggskin ggskin_textdiv';
			this._tooltip.ggTextDiv=this._tooltip__text;
			this._tooltip.ggId="tooltip";
			this._tooltip.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._tooltip.ggVisible=true;
			this._tooltip.className='ggskin ggskin_text ';
			this._tooltip.ggType='text';
			hs ='';
			hs+='height : 20px;';
			hs+='left : 0px;';
			hs+='position : absolute;';
			hs+='top : 79px;';
			hs+='visibility : inherit;';
			hs+='width : 148px;';
			this._tooltip.setAttribute('style',hs);
			this._tooltip.style[domTransform + 'Origin']='50% 50%';
			hs ='position:absolute;';
			hs+='left: 0px;';
			hs+='top:  0px;';
			hs+='width: 148px;';
			hs+='height: 20px;';
			hs+='border: 0px solid #000000;';
			hs+='color: rgba(255,255,255,1);';
			hs+='text-align: center;';
			hs+='white-space: nowrap;';
			hs+='padding: 0px 1px 0px 1px;';
			hs+='overflow: hidden;';
			this._tooltip__text.setAttribute('style',hs);
			this._tooltip__text.innerHTML=me.hotspot.title;
			this._tooltip.appendChild(this._tooltip__text);
			me._tooltip.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._tooltip.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			this._tooltip.ggUpdatePosition=function () {
			}
			this._hotspot_preview.appendChild(this._tooltip);
			this._checkmark_tick0=document.createElement('div');
			this._checkmark_tick0__img=document.createElement('img');
			this._checkmark_tick0__img.className='ggskin ggskin_svg';
			this._checkmark_tick0__img.setAttribute('src',basePath + 'images/checkmark_tick0.svg');
			this._checkmark_tick0__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
			this._checkmark_tick0__img['ondragstart']=function() { return false; };
			this._checkmark_tick0.appendChild(this._checkmark_tick0__img);
			this._checkmark_tick0.ggId="checkmark_tick";
			this._checkmark_tick0.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._checkmark_tick0.ggVisible=false;
			this._checkmark_tick0.className='ggskin ggskin_svg ';
			this._checkmark_tick0.ggType='svg';
			hs ='';
			hs+='height : 36px;';
			hs+='left : 110px;';
			hs+='position : absolute;';
			hs+='top : 3px;';
			hs+='visibility : hidden;';
			hs+='width : 36px;';
			this._checkmark_tick0.setAttribute('style',hs);
			this._checkmark_tick0.style[domTransform + 'Origin']='50% 50%';
			me._checkmark_tick0.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._checkmark_tick0.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			me._checkmark_tick0.ggCurrentLogicStateVisible = -1;
			this._checkmark_tick0.ggUpdateConditionNodeChange=function () {
				var newLogicStateVisible;
				if (
					(me.player.nodeVisited(me._checkmark_tick0.ggElementNodeId()) == true)
				)
				{
					newLogicStateVisible = 0;
				}
				else {
					newLogicStateVisible = -1;
				}
				if (me._checkmark_tick0.ggCurrentLogicStateVisible != newLogicStateVisible) {
					me._checkmark_tick0.ggCurrentLogicStateVisible = newLogicStateVisible;
					me._checkmark_tick0.style[domTransition]='';
					if (me._checkmark_tick0.ggCurrentLogicStateVisible == 0) {
						me._checkmark_tick0.style.visibility=(Number(me._checkmark_tick0.style.opacity)>0||!me._checkmark_tick0.style.opacity)?'inherit':'hidden';
						me._checkmark_tick0.ggVisible=true;
					}
					else {
						me._checkmark_tick0.style.visibility="hidden";
						me._checkmark_tick0.ggVisible=false;
					}
				}
			}
			this._checkmark_tick0.ggUpdatePosition=function () {
			}
			this._checkmark_tick0.ggNodeChange=function () {
				me._checkmark_tick0.ggUpdateConditionNodeChange();
			}
			this._hotspot_preview.appendChild(this._checkmark_tick0);
			this.__div.appendChild(this._hotspot_preview);
			this.hotspotTimerEvent=function() {
				setTimeout(function() { me.hotspotTimerEvent(); }, 10);
				if (me.elementMouseOver['_div']) {
				}
				me._hotspot_preview.ggUpdateConditionTimer();
			}
			this.hotspotTimerEvent();
		} else
		if (hotspot.skinid=='ht_info') {
			this.__div=document.createElement('div');
			this.__div.ggId="ht_info";
			this.__div.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this.__div.ggVisible=true;
			this.__div.className='ggskin ggskin_hotspot ';
			this.__div.ggType='hotspot';
			hs ='';
			hs+='cursor : pointer;';
			hs+='height : 5px;';
			hs+='left : 330px;';
			hs+='position : absolute;';
			hs+='top : 28px;';
			hs+='visibility : inherit;';
			hs+='width : 5px;';
			this.__div.setAttribute('style',hs);
			this.__div.style[domTransform + 'Origin']='50% 50%';
			me.__div.ggIsActive=function() {
				return me.player.getCurrentNode()==this.ggElementNodeId();
			}
			me.__div.ggElementNodeId=function() {
				return me.hotspot.url.substr(1, me.hotspot.url.length - 2);
			}
			this.__div.onclick=function () {
				me.skin._information.ggVisible = !me.skin._information.ggVisible;
				me.skin._information.style[domTransition]='none';
				me.skin._information.style.visibility=((me.skin._information.ggVisible)&&(Number(me.skin._information.style.opacity)>0||!me.skin._information.style.opacity))?'inherit':'hidden';
				me.skin._info_title.ggText="<b>"+me.hotspot.title+"<\/b>";
				me.skin._info_title__text.innerHTML=me.skin._info_title.ggText;
				if (me.skin._info_title.ggUpdateText) {
					me.skin._info_title.ggUpdateText=function() {
						var hs="<b>"+me.hotspot.title+"<\/b>";
						if (hs!=this.ggText) {
							this.ggText=hs;
							this.ggTextDiv.innerHTML=hs;
							if (this.ggUpdatePosition) this.ggUpdatePosition();
						}
					}
				}
				me.skin._info_text_body.ggText=me.hotspot.description;
				me.skin._info_text_body__text.innerHTML=me.skin._info_text_body.ggText;
				if (me.skin._info_text_body.ggUpdateText) {
					me.skin._info_text_body.ggUpdateText=function() {
						var hs=me.hotspot.description;
						if (hs!=this.ggText) {
							this.ggText=hs;
							this.ggTextDiv.innerHTML=hs;
							if (this.ggUpdatePosition) this.ggUpdatePosition();
						}
					}
				}
				me.skin._screentint.style[domTransition]='none';
				me.skin._screentint.style.visibility=(Number(me.skin._screentint.style.opacity)>0||!me.skin._screentint.style.opacity)?'inherit':'hidden';
				me.skin._screentint.ggVisible=true;
				me.skin.hotspotProxyClick(me.hotspot.id);
			}
			this.__div.onmouseover=function () {
				me.player.setActiveHotspot(me.hotspot);
				me.elementMouseOver['_div']=true;
				me.skin.hotspotProxyOver(me.hotspot.id);
			}
			this.__div.onmouseout=function () {
				me.player.setActiveHotspot(null);
				me.elementMouseOver['_div']=false;
				me.skin.hotspotProxyOut(me.hotspot.id);
			}
			this.__div.ontouchend=function () {
				me.elementMouseOver['_div']=false;
			}
			this.__div.ggUpdatePosition=function () {
			}
			this._ht_info_image=document.createElement('div');
			this._ht_info_image__img=document.createElement('img');
			this._ht_info_image__img.className='ggskin ggskin_svg';
			this._ht_info_image__img.setAttribute('src',basePath + 'images/ht_info_image.svg');
			this._ht_info_image__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
			this._ht_info_image__img['ondragstart']=function() { return false; };
			this._ht_info_image.appendChild(this._ht_info_image__img);
			this._ht_info_image.ggId="ht_info_image";
			this._ht_info_image.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._ht_info_image.ggVisible=true;
			this._ht_info_image.className='ggskin ggskin_svg ';
			this._ht_info_image.ggType='svg';
			hs ='';
			hs+='height : 32px;';
			hs+='left : -16px;';
			hs+='position : absolute;';
			hs+='top : -17px;';
			hs+='visibility : inherit;';
			hs+='width : 32px;';
			this._ht_info_image.setAttribute('style',hs);
			this._ht_info_image.style[domTransform + 'Origin']='50% 50%';
			me._ht_info_image.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._ht_info_image.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			this._ht_info_image.ggUpdatePosition=function () {
			}
			this.__div.appendChild(this._ht_info_image);
			this._tt_information=document.createElement('div');
			this._tt_information__text=document.createElement('div');
			this._tt_information.className='ggskin ggskin_textdiv';
			this._tt_information.ggTextDiv=this._tt_information__text;
			this._tt_information.ggId="tt_information";
			this._tt_information.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._tt_information.ggVisible=false;
			this._tt_information.className='ggskin ggskin_text ';
			this._tt_information.ggType='text';
			hs ='';
			hs+='height : 17px;';
			hs+='left : -50px;';
			hs+='position : absolute;';
			hs+='top : 20px;';
			hs+='visibility : hidden;';
			hs+='width : 95px;';
			this._tt_information.setAttribute('style',hs);
			this._tt_information.style[domTransform + 'Origin']='50% 50%';
			hs ='position:absolute;';
			hs+='left: 0px;';
			hs+='top:  0px;';
			hs+='width: 95px;';
			hs+='height: auto;';
			hs+='background: #ffffff;';
			hs+='background: rgba(255,255,255,0.784314);';
			hs+='border: 1px solid #000000;';
			hs+='border-radius: 5px;';
			hs+=cssPrefix + 'border-radius: 5px;';
			hs+='color: #000000;';
			hs+='text-align: center;';
			hs+='white-space: pre-wrap;';
			hs+='padding: 1px 2px 1px 2px;';
			hs+='overflow: hidden;';
			this._tt_information__text.setAttribute('style',hs);
			this._tt_information__text.innerHTML=me.hotspot.title;
			this._tt_information.appendChild(this._tt_information__text);
			me._tt_information.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._tt_information.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			me._tt_information.ggCurrentLogicStateVisible = -1;
			this._tt_information.ggUpdateConditionTimer=function () {
				var newLogicStateVisible;
				if (
					(me.elementMouseOver['_div'] == true)
				)
				{
					newLogicStateVisible = 0;
				}
				else {
					newLogicStateVisible = -1;
				}
				if (me._tt_information.ggCurrentLogicStateVisible != newLogicStateVisible) {
					me._tt_information.ggCurrentLogicStateVisible = newLogicStateVisible;
					me._tt_information.style[domTransition]='';
					if (me._tt_information.ggCurrentLogicStateVisible == 0) {
						me._tt_information.style.visibility=(Number(me._tt_information.style.opacity)>0||!me._tt_information.style.opacity)?'inherit':'hidden';
						me._tt_information.ggVisible=true;
					}
					else {
						me._tt_information.style.visibility="hidden";
						me._tt_information.ggVisible=false;
					}
				}
			}
			this._tt_information.ggUpdatePosition=function () {
			}
			this.__div.appendChild(this._tt_information);
			this.hotspotTimerEvent=function() {
				setTimeout(function() { me.hotspotTimerEvent(); }, 10);
				if (me.elementMouseOver['_div']) {
				}
				me._tt_information.ggUpdateConditionTimer();
			}
			this.hotspotTimerEvent();
		} else
		if (hotspot.skinid=='ht_image') {
			this.__div=document.createElement('div');
			this.__div.ggId="ht_image";
			this.__div.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this.__div.ggVisible=true;
			this.__div.className='ggskin ggskin_hotspot ';
			this.__div.ggType='hotspot';
			hs ='';
			hs+='height : 5px;';
			hs+='left : 435px;';
			hs+='position : absolute;';
			hs+='top : 28px;';
			hs+='visibility : inherit;';
			hs+='width : 5px;';
			this.__div.setAttribute('style',hs);
			this.__div.style[domTransform + 'Origin']='50% 50%';
			me.__div.ggIsActive=function() {
				return me.player.getCurrentNode()==this.ggElementNodeId();
			}
			me.__div.ggElementNodeId=function() {
				return me.hotspot.url.substr(1, me.hotspot.url.length - 2);
			}
			this.__div.onclick=function () {
				me.skin._image_popup.style[domTransition]='none';
				me.skin._image_popup.style.visibility=(Number(me.skin._image_popup.style.opacity)>0||!me.skin._image_popup.style.opacity)?'inherit':'hidden';
				me.skin._image_popup.ggVisible=true;
				me.skin._popup_image.ggText=me.player.getBasePath()+""+me.hotspot.url;
				me.skin._popup_image__img.src=me.skin._popup_image.ggText;
				me.skin._screentint.style[domTransition]='none';
				me.skin._screentint.style.visibility=(Number(me.skin._screentint.style.opacity)>0||!me.skin._screentint.style.opacity)?'inherit':'hidden';
				me.skin._screentint.ggVisible=true;
				me.skin.hotspotProxyClick(me.hotspot.id);
			}
			this.__div.onmouseover=function () {
				me.player.setActiveHotspot(me.hotspot);
				me.elementMouseOver['_div']=true;
				me.skin.hotspotProxyOver(me.hotspot.id);
			}
			this.__div.onmouseout=function () {
				me.player.setActiveHotspot(null);
				me.elementMouseOver['_div']=false;
				me.skin.hotspotProxyOut(me.hotspot.id);
			}
			this.__div.ontouchend=function () {
				me.elementMouseOver['_div']=false;
			}
			this.__div.ggUpdatePosition=function () {
			}
			this._hstext_image=document.createElement('div');
			this._hstext_image__text=document.createElement('div');
			this._hstext_image.className='ggskin ggskin_textdiv';
			this._hstext_image.ggTextDiv=this._hstext_image__text;
			this._hstext_image.ggId="hstext_image";
			this._hstext_image.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._hstext_image.ggVisible=false;
			this._hstext_image.className='ggskin ggskin_text ';
			this._hstext_image.ggType='text';
			hs ='';
			hs+='height : 17px;';
			hs+='left : -51px;';
			hs+='position : absolute;';
			hs+='top : 20px;';
			hs+='visibility : hidden;';
			hs+='width : 95px;';
			this._hstext_image.setAttribute('style',hs);
			this._hstext_image.style[domTransform + 'Origin']='50% 50%';
			hs ='position:absolute;';
			hs+='left: 0px;';
			hs+='top:  0px;';
			hs+='width: 95px;';
			hs+='height: auto;';
			hs+='background: #ffffff;';
			hs+='background: rgba(255,255,255,0.705882);';
			hs+='border: 1px solid #000000;';
			hs+='border-radius: 5px;';
			hs+=cssPrefix + 'border-radius: 5px;';
			hs+='color: rgba(0,0,0,1);';
			hs+='text-align: center;';
			hs+='white-space: pre-wrap;';
			hs+='padding: 1px 2px 1px 2px;';
			hs+='overflow: hidden;';
			this._hstext_image__text.setAttribute('style',hs);
			this._hstext_image__text.innerHTML=me.hotspot.title;
			this._hstext_image.appendChild(this._hstext_image__text);
			me._hstext_image.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._hstext_image.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			me._hstext_image.ggCurrentLogicStateVisible = -1;
			this._hstext_image.ggUpdateConditionTimer=function () {
				var newLogicStateVisible;
				if (
					(me.elementMouseOver['_div'] == true)
				)
				{
					newLogicStateVisible = 0;
				}
				else {
					newLogicStateVisible = -1;
				}
				if (me._hstext_image.ggCurrentLogicStateVisible != newLogicStateVisible) {
					me._hstext_image.ggCurrentLogicStateVisible = newLogicStateVisible;
					me._hstext_image.style[domTransition]='';
					if (me._hstext_image.ggCurrentLogicStateVisible == 0) {
						me._hstext_image.style.visibility=(Number(me._hstext_image.style.opacity)>0||!me._hstext_image.style.opacity)?'inherit':'hidden';
						me._hstext_image.ggVisible=true;
					}
					else {
						me._hstext_image.style.visibility="hidden";
						me._hstext_image.ggVisible=false;
					}
				}
			}
			this._hstext_image.ggUpdatePosition=function () {
			}
			this.__div.appendChild(this._hstext_image);
			this._hsimage_image=document.createElement('div');
			this._hsimage_image__img=document.createElement('img');
			this._hsimage_image__img.className='ggskin ggskin_svg';
			this._hsimage_image__img.setAttribute('src',basePath + 'images/hsimage_image.svg');
			this._hsimage_image__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
			this._hsimage_image__img['ondragstart']=function() { return false; };
			this._hsimage_image.appendChild(this._hsimage_image__img);
			this._hsimage_image.ggId="hsimage_image";
			this._hsimage_image.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._hsimage_image.ggVisible=true;
			this._hsimage_image.className='ggskin ggskin_svg ';
			this._hsimage_image.ggType='svg';
			hs ='';
			hs+='cursor : pointer;';
			hs+='height : 50px;';
			hs+='left : -24px;';
			hs+='position : absolute;';
			hs+='top : -24px;';
			hs+='visibility : inherit;';
			hs+='width : 50px;';
			this._hsimage_image.setAttribute('style',hs);
			this._hsimage_image.style[domTransform + 'Origin']='50% 50%';
			me._hsimage_image.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._hsimage_image.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			this._hsimage_image.ggUpdatePosition=function () {
			}
			this.__div.appendChild(this._hsimage_image);
			this.hotspotTimerEvent=function() {
				setTimeout(function() { me.hotspotTimerEvent(); }, 10);
				if (me.elementMouseOver['_div']) {
				}
				me._hstext_image.ggUpdateConditionTimer();
			}
			this.hotspotTimerEvent();
		} else
		{
			this.__div=document.createElement('div');
			this.__div.ggId="ht_url";
			this.__div.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this.__div.ggVisible=true;
			this.__div.className='ggskin ggskin_hotspot ';
			this.__div.ggType='hotspot';
			hs ='';
			hs+='height : 5px;';
			hs+='left : 538px;';
			hs+='position : absolute;';
			hs+='top : 27px;';
			hs+='visibility : inherit;';
			hs+='width : 5px;';
			this.__div.setAttribute('style',hs);
			this.__div.style[domTransform + 'Origin']='50% 50%';
			me.__div.ggIsActive=function() {
				return me.player.getCurrentNode()==this.ggElementNodeId();
			}
			me.__div.ggElementNodeId=function() {
				return me.hotspot.url.substr(1, me.hotspot.url.length - 2);
			}
			this.__div.onclick=function () {
				me.player.openUrl(me.hotspot.url,me.hotspot.target);
				me.skin.hotspotProxyClick(me.hotspot.id);
			}
			this.__div.onmouseover=function () {
				me.player.setActiveHotspot(me.hotspot);
				me.elementMouseOver['_div']=true;
				me.skin.hotspotProxyOver(me.hotspot.id);
			}
			this.__div.onmouseout=function () {
				me.player.setActiveHotspot(null);
				me.elementMouseOver['_div']=false;
				me.skin.hotspotProxyOut(me.hotspot.id);
			}
			this.__div.ontouchend=function () {
				me.elementMouseOver['_div']=false;
			}
			this.__div.ggUpdatePosition=function () {
			}
			this._hsimage_url=document.createElement('div');
			this._hsimage_url__img=document.createElement('img');
			this._hsimage_url__img.className='ggskin ggskin_svg';
			this._hsimage_url__img.setAttribute('src',basePath + 'images/hsimage_url.svg');
			this._hsimage_url__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
			this._hsimage_url__img['ondragstart']=function() { return false; };
			this._hsimage_url.appendChild(this._hsimage_url__img);
			this._hsimage_url.ggId="hsimage_url";
			this._hsimage_url.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._hsimage_url.ggVisible=true;
			this._hsimage_url.className='ggskin ggskin_svg ';
			this._hsimage_url.ggType='svg';
			hs ='';
			hs+='cursor : pointer;';
			hs+='height : 32px;';
			hs+='left : -16px;';
			hs+='position : absolute;';
			hs+='top : -16px;';
			hs+='visibility : inherit;';
			hs+='width : 32px;';
			this._hsimage_url.setAttribute('style',hs);
			this._hsimage_url.style[domTransform + 'Origin']='50% 50%';
			me._hsimage_url.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._hsimage_url.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			this._hsimage_url.ggUpdatePosition=function () {
			}
			this.__div.appendChild(this._hsimage_url);
			this._hstext_url=document.createElement('div');
			this._hstext_url__text=document.createElement('div');
			this._hstext_url.className='ggskin ggskin_textdiv';
			this._hstext_url.ggTextDiv=this._hstext_url__text;
			this._hstext_url.ggId="hstext_url";
			this._hstext_url.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._hstext_url.ggVisible=true;
			this._hstext_url.className='ggskin ggskin_text ';
			this._hstext_url.ggType='text';
			hs ='';
			hs+='height : 17px;';
			hs+='left : -50px;';
			hs+='opacity : 0;';
			hs+='position : absolute;';
			hs+='top : 21px;';
			hs+='visibility : hidden;';
			hs+='width : 95px;';
			this._hstext_url.setAttribute('style',hs);
			this._hstext_url.style[domTransform + 'Origin']='50% 50%';
			hs ='position:absolute;';
			hs+='left: 0px;';
			hs+='top:  0px;';
			hs+='width: auto;';
			hs+='height: auto;';
			hs+='background: #ffffff;';
			hs+='background: rgba(255,255,255,0.705882);';
			hs+='border: 1px solid #000000;';
			hs+='border-radius: 5px;';
			hs+=cssPrefix + 'border-radius: 5px;';
			hs+='color: rgba(0,0,0,1);';
			hs+='text-align: center;';
			hs+='white-space: nowrap;';
			hs+='padding: 1px 2px 1px 2px;';
			hs+='overflow: hidden;';
			this._hstext_url__text.setAttribute('style',hs);
			this._hstext_url__text.innerHTML=me.hotspot.title;
			this._hstext_url.appendChild(this._hstext_url__text);
			me._hstext_url.ggIsActive=function() {
				if ((this.parentNode) && (this.parentNode.ggIsActive)) {
					return this.parentNode.ggIsActive();
				}
				return false;
			}
			me._hstext_url.ggElementNodeId=function() {
				if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
					return this.parentNode.ggElementNodeId();
				}
				return me.ggNodeId;
			}
			me._hstext_url.ggCurrentLogicStateAlpha = -1;
			this._hstext_url.ggUpdateConditionTimer=function () {
				var newLogicStateAlpha;
				if (
					(me.elementMouseOver['_div'] == true)
				)
				{
					newLogicStateAlpha = 0;
				}
				else {
					newLogicStateAlpha = -1;
				}
				if (me._hstext_url.ggCurrentLogicStateAlpha != newLogicStateAlpha) {
					me._hstext_url.ggCurrentLogicStateAlpha = newLogicStateAlpha;
					me._hstext_url.style[domTransition]='opacity 500ms ease 0ms, visibility 500ms ease 0ms';
					if (me._hstext_url.ggCurrentLogicStateAlpha == 0) {
						me._hstext_url.style.visibility=me._hstext_url.ggVisible?'inherit':'hidden';
						me._hstext_url.style.opacity=1;
					}
					else {
						me._hstext_url.style.visibility="hidden";
						me._hstext_url.style.opacity=0;
					}
				}
			}
			this._hstext_url.ggUpdatePosition=function () {
				this.style[domTransition]='none';
				this.ggTextDiv.style.left=((99-this.ggTextDiv.offsetWidth)/2) + 'px';
			}
			this.__div.appendChild(this._hstext_url);
			this.hotspotTimerEvent=function() {
				setTimeout(function() { me.hotspotTimerEvent(); }, 10);
				if (me.elementMouseOver['_div']) {
				}
				me._hstext_url.ggUpdateConditionTimer();
			}
			this.hotspotTimerEvent();
		}
	};
	this.addSkinHotspot=function(hotspot) {
		return new SkinHotspotClass(me,hotspot);
	}
	function SkinCloner_thumbnail_cloner_Class(nodeId, parent) {
		var me=this;
		this.skin=parent;
		this.player=this.skin.player;
		this.ggNodeId=nodeId;
		this.ggUserdata=this.skin.player.getNodeUserdata(nodeId);
		this.elementMouseDown=[];
		this.elementMouseOver=[];
		this.__div=document.createElement('div');
		this.__div.setAttribute('style','position: absolute; left: 0px; top: 0px; width: 98px; height: 60px; visibility: inherit;');
		this.__div.ggIsActive = function() {
			return me.player.getCurrentNode()==me.ggNodeId;
		}
		this.__div.ggElementNodeId=function() {
			return me.ggNodeId;
		}
		this._thumbnail_nodeimage=document.createElement('div');
		this._thumbnail_nodeimage__img=document.createElement('img');
		this._thumbnail_nodeimage__img.className='ggskin ggskin_nodeimage';
		this._thumbnail_nodeimage__img.setAttribute('src',basePath + "images/thumbnail_nodeimage_" + nodeId + ".jpg");
		this._thumbnail_nodeimage.ggNodeId=nodeId;
		this._thumbnail_nodeimage__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._thumbnail_nodeimage__img.className='ggskin ggskin_nodeimage';
		this._thumbnail_nodeimage__img['ondragstart']=function() { return false; };
		this._thumbnail_nodeimage.appendChild(this._thumbnail_nodeimage__img);
		this._thumbnail_nodeimage.ggId="Thumbnail NodeImage";
		this._thumbnail_nodeimage.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._thumbnail_nodeimage.ggVisible=true;
		this._thumbnail_nodeimage.className='ggskin ggskin_nodeimage ';
		this._thumbnail_nodeimage.ggType='nodeimage';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 60px;';
		hs+='left : 2px;';
		hs+='position : absolute;';
		hs+='top : 2px;';
		hs+='visibility : inherit;';
		hs+='width : 100px;';
		this._thumbnail_nodeimage.setAttribute('style',hs);
		this._thumbnail_nodeimage.style[domTransform + 'Origin']='50% 50%';
		me._thumbnail_nodeimage.ggIsActive=function() {
			return me.player.getCurrentNode()==this.ggElementNodeId();
		}
		me._thumbnail_nodeimage.ggElementNodeId=function() {
			return this.ggNodeId;
		}
		this._thumbnail_nodeimage.onclick=function () {
			me.player.openNext("{"+me.ggNodeId+"}",me.player.hotspot.target);
		}
		this._thumbnail_nodeimage.ggUpdatePosition=function () {
		}
		this._checkmark_tick=document.createElement('div');
		this._checkmark_tick__img=document.createElement('img');
		this._checkmark_tick__img.className='ggskin ggskin_svg';
		this._checkmark_tick__img.setAttribute('src',basePath + 'images/checkmark_tick.svg');
		this._checkmark_tick__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;');
		this._checkmark_tick__img['ondragstart']=function() { return false; };
		this._checkmark_tick.appendChild(this._checkmark_tick__img);
		this._checkmark_tick.ggId="checkmark_tick";
		this._checkmark_tick.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._checkmark_tick.ggVisible=false;
		this._checkmark_tick.className='ggskin ggskin_svg ';
		this._checkmark_tick.ggType='svg';
		hs ='';
		hs+='height : 26px;';
		hs+='left : 69px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : hidden;';
		hs+='width : 26px;';
		this._checkmark_tick.setAttribute('style',hs);
		this._checkmark_tick.style[domTransform + 'Origin']='50% 50%';
		me._checkmark_tick.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._checkmark_tick.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		me._checkmark_tick.ggCurrentLogicStateVisible = -1;
		this._checkmark_tick.ggUpdateConditionTimer=function () {
			var newLogicStateVisible;
			if (
				(me.player.nodeVisited(me._checkmark_tick.ggElementNodeId()) == true) || 
				(me._checkmark_tick.ggIsActive() == true)
			)
			{
				newLogicStateVisible = 0;
			}
			else {
				newLogicStateVisible = -1;
			}
			if (me._checkmark_tick.ggCurrentLogicStateVisible != newLogicStateVisible) {
				me._checkmark_tick.ggCurrentLogicStateVisible = newLogicStateVisible;
				me._checkmark_tick.style[domTransition]='';
				if (me._checkmark_tick.ggCurrentLogicStateVisible == 0) {
					me._checkmark_tick.style.visibility=(Number(me._checkmark_tick.style.opacity)>0||!me._checkmark_tick.style.opacity)?'inherit':'hidden';
					me._checkmark_tick.ggVisible=true;
				}
				else {
					me._checkmark_tick.style.visibility="hidden";
					me._checkmark_tick.ggVisible=false;
				}
			}
		}
		this._checkmark_tick.ggUpdatePosition=function () {
		}
		this._thumbnail_nodeimage.appendChild(this._checkmark_tick);
		this._thumbnail_active=document.createElement('div');
		this._thumbnail_active.ggId="Thumbnail Active";
		this._thumbnail_active.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._thumbnail_active.ggVisible=true;
		this._thumbnail_active.className='ggskin ggskin_rectangle ';
		this._thumbnail_active.ggType='rectangle';
		hs ='';
		hs+='border : 3px solid #d1d1d1;';
		hs+='height : 53px;';
		hs+='left : -1px;';
		hs+='position : absolute;';
		hs+='top : -1px;';
		hs+='visibility : inherit;';
		hs+='width : 91px;';
		this._thumbnail_active.setAttribute('style',hs);
		this._thumbnail_active.style[domTransform + 'Origin']='50% 50%';
		me._thumbnail_active.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		me._thumbnail_active.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return me.player.getCurrentNode();
		}
		this._thumbnail_active.onmouseover=function () {
			me.elementMouseOver['thumbnail_active']=true;
		}
		this._thumbnail_active.onmouseout=function () {
			me.elementMouseOver['thumbnail_active']=false;
		}
		this._thumbnail_active.ontouchend=function () {
			me.elementMouseOver['thumbnail_active']=false;
		}
		me._thumbnail_active.ggCurrentLogicStateBorderColor = -1;
		this._thumbnail_active.ggUpdateConditionTimer=function () {
			var newLogicStateBorderColor;
			if (
				(me._thumbnail_active.ggIsActive() == true)
			)
			{
				newLogicStateBorderColor = 0;
			}
			else if (
				(me.elementMouseOver['thumbnail_active'] == true)
			)
			{
				newLogicStateBorderColor = 1;
			}
			else {
				newLogicStateBorderColor = -1;
			}
			if (me._thumbnail_active.ggCurrentLogicStateBorderColor != newLogicStateBorderColor) {
				me._thumbnail_active.ggCurrentLogicStateBorderColor = newLogicStateBorderColor;
				me._thumbnail_active.style[domTransition]='border-color none';
				if (me._thumbnail_active.ggCurrentLogicStateBorderColor == 0) {
					me._thumbnail_active.style.borderColor="rgba(255,255,255,1)";
				}
				else if (me._thumbnail_active.ggCurrentLogicStateBorderColor == 1) {
					me._thumbnail_active.style.borderColor="rgba(255,255,255,1)";
				}
				else {
					me._thumbnail_active.style.borderColor="rgba(209,209,209,1)";
				}
			}
		}
		this._thumbnail_active.ggUpdatePosition=function () {
		}
		this._thumbnail_nodeimage.appendChild(this._thumbnail_active);
		this.__div.appendChild(this._thumbnail_nodeimage);
	};
	this.addSkin();
};