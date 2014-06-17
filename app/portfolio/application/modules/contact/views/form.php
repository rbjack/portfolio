 <div class="row">
                         <form class="form-horizontal" action="contact" method="post" accept-charset="utf-8" role="form"> 
                              <?php
                                   echo validation_errors();
                              ?>
                              <div class="form-group">
                                   <label for="name" class="col-sm-2">Name</label>
                                   <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo set_value('name'); ?>">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label for="email" class="col-sm-2">Email</label>
                                   <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="" value="<?php echo set_value('email'); ?>">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label for="message" class="col-sm-2">Message</label>
                                   <div class="col-sm-10">
                                        <textarea id="message" class="form-control" name="message" rows="5"><?php echo set_value('message'); ?></textarea>
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label for="captcha" class="col-sm-2 col-xs-3">Captcha</label>
                                   <div class="col-sm-3 col-xs-9">
                                        <img src="captcha" alt="">
                                   </div>
                                   <div class="col-sm-7">
                                        <input type="text" class="form-control" id="captcha" name="captcha">
                                   </div>
                              </div>
                              <button type="submit" class="btn btn-default">Submit</button>
                              <p>Richard Jackson<br>
                                   Portland, OR 503.662.2491<br>
                                   <script type="text/javascript" charset="utf-8">
                                        <!--
                                        var pool=">b\&\?rcd\/:ne=s<uj\"k@hatil. omf";
                                        var pick="=DIC4:L;@KDFGEJ84F5CD46B41?D5A<J9H5JK3<>1?:5E;5J9ED5E@04F5CD46B41?D5A<J9H5JK=7D0";
                                        var format="";
                                        for(j=0;j<pick.length;j++) { format+=pool.charAt(pick.charCodeAt(j)-48); }
                                        document.write(format);
                                        // -->
                                   </script>
                                   <br>
                                   <br>
                              </p>
                         </form>
                    </div>