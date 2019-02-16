<?php include_once('header.php');?>


<div class="container">
            
                
                          
                                <div class="row margem">
                                    <div class="col-lg-4 centro">
                                        <div class="circle-icon fa-2x "><i class="fa fa-map-marker"></i></div>
                                        <h2 class="title">Endereço</h2>
                                        <span>Rua Pele, 576, Jardim Vinsentino - Fernadôpolis/SP</span>
                                    </div>
                                    <div class="col-lg-4  centro">
                                        <div class="circle-icon fa-2x "><i class="fa fa-phone"></i></div>
                                        <h2 class="title">Telefone</h2>
                                        <span>(17) 3699-999</span>
                                    </div>
                                    <div class="col-lg-4  centro">
                                        <div class="circle-icon fa-2x"><i class="fa fa-envelope"></i></div>
                                        <h2 class="title">E-mail</h2>
                                        <span>coc-insentivo@gmail.com</span>
                                    </div>
                                </div>
</div>                                
                     
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.4412960292107!2d-50.25573828531468!3d-20.281993186407707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9497f61b11a510e7%3A0xb446dc7313491a17!2sCol%C3%A9gio+COC!5e0!3m2!1spt-BR!2sbr!4v1549684052129" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
           
                <div class="margem section section-padding contact-main">
                    <div class="container">
                        <div class="contact-main-wrapper">                           
                            
                            <div class="group-title-index edu-ab-title">
                            <div class="section-header">
                                <h2>Mural de Notícias</h2>
                            </div>
                                <div class="bottom-title"><i class="bottom-icon fa fa-pencil"></i></div>
                            </div>
                            <form action="/contacts/send" id="contactform" class="bg-w-form contact-form" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="ContactName" class="control-label form-label">Nome <span class="highlight">*</span></label>                                        <input type="text" id='ContactName' required name="contact[name]" class="form-control form-input"/>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="ContactEmail" class="control-label form-label">E-mail <span class="highlight">*</span></label>                                        <input type="email" id='ContactEmail' required name="contact[email]" class="form-control form-input"/>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="ContactTelephone" class="control-label form-label">Telefone <span class="highlight">*</span></label>                                        <input type="text" id='ContactTelephone' required name="contact[telephone]" class="form-control form-input"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="ContactState" class="control-label form-label">Estado <span class="highlight">*</span></label>                                        <select class="form-control form-input" id='ContactState' name="contact[state]" required>
                                            <option value="">Escolha um estado</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="ContactCity" class="control-label form-label">Cidade <span class="highlight">*</span></label>                                        <input type="text" required id='ContactCity' name="contact[city]" class="form-control form-input"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="ContactProfile" class="control-label form-label">Perfil <span class="highlight">*</span></label>                                        <select class="form-control form-input" id='ContactProfile' name='contact[profile]' required>
                                            <option value="">Escolha um Perfil</option>
                                            <option value="Pai/Mãe/Responsável">Pai/Mãe/Responsável</option>
                                            <option value="Aluno(a)">Aluno(a)</option>
                                            <option value="Professor(a)">Professor(a)</option>
                                            <option value="Mantenedor(a)">Mantenedor(a)</option>
                                            <option value="Outros">Outros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="ContactSubject" class="control-label form-label">Assunto</label>                                        <select class="form-control form-input" id='ContactSubject' name='contact[subject]'>
                                            <option value="">Escolha um assunto</option>
                                            <option value="1">Elogios</option>
                                            <option value="2">Eventos</option>
                                            <option value="3">NI</option>
                                            <option value="4">Outros</option>
                                            <option value="5">Produtos e Soluções</option>
                                            <option value="6">Reclamações</option>
                                            <option value="7">Seja uma escola COC</option>
                                            <option value="8">Sugestões</option>
                                            <option value="9">Trabalhe Conosco</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="contact-question form-group">
                                        <label for="ContactMessage" class="control-label form-label">Mensagem <span class="highlight">*</span></label>                                        <textarea class="form-control form-input" required id='ContactMessage' name='contact[message]'></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-submit">
                                <button type="submit" class="btn btn-contact btn-green p-direita"><span>Enviar</span></button>
                            </div>
                            </form>                            <div class='result col-md-12'></div>
                        </div>                        
                    </div>
                </div>
               
  </div>
    <!--BUTTON BACK TO TOP-->
</div>

   
<?php include_once('rodape.php');?>
