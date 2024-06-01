function FG_FormSubmitter(url,msgdiv,srcdiv,errordiv,formobj)
{
      this.form_action = url;
      this.divobjMsg   = msgdiv;
      this.divobjSrc   = srcdiv;
      this.divobjerror = errordiv;
      this.formobj = formobj;
      
      
      this.submit_form = function(frmobj)
      {  
          var postStr ="";
          for (var i = 0; i < frmobj.elements.length; ++i) 
          {
             postStr += frmobj.elements[i].name +"="
                        + encodeURIComponent(frmobj.elements[i].value)+"&";
          }
          this.Init('POST', this.form_action);

          this.Send(postStr);   
      }
      
      this.OnSuccess = function()
      {
         var msg = this.GetResponseText();
         if(msg == 'success')
         {
            this.divobjMsg.SavedInnerHTML = this.divobjMsg.innerHTML;
            this.divobjMsg.innerHTML = this.divobjSrc.innerHTML;
         }
         else
         {
            this.divobjerror.innerHTML = msg;
            this.formobj.refresh_container();
         }
      }
}

FG_FormSubmitter.prototype = new FG_Ajax();

