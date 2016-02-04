<%-- 
    Document   : cadUsuario
    Created on : 04/11/2013, 09:29:18
    Author     : ferrasa
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadastro de Usuários</title>
    </head>
    <body>
        <h2>Cadastro de Usuários</h2><br>
        <form action="/sisusuario/SvUsuario" method="POST">
            Nome:<input type="text" name="nome" value="" /><br>
            CPF:<input type="text" name="cpf" value="" /><br>
            <input type="hidden" name="ACAO" value="INSERIR" />
            <input type="submit" value="Cadastrar" />
        </form>
        
        <%
            String id = request.getParameter("ins");
            
            if (id != null)
                out.println("USER INSERIDO COM SUCESSO. ID: "+id);
            
        %>
        
    </body>
</html>
