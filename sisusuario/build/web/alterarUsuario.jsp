<%-- 
    Document   : cadUsuario
    Created on : 04/11/2013, 09:29:18
    Author     : ferrasa
--%>

<%@page contentType="text/html" pageEncoding="UTF-8" import="model.*" import="java.util.*"%>
<jsp:useBean class="model.DAOUsuario" id="daou" scope="page"></jsp:useBean>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alterar Usuario</title>
    </head>
    <body>
        <h2>Alterar Usuario</h2><br>
        <%
            String id = request.getParameter("id");
                    
            if (id != null)
            {
                Usuario us = daou.getById(id);
    
            
        %>
        <form action="/sisusuario/SvUsuario" method="POST">
            
            Nome:<input type="text" name="nome" value="<%=us.getNome()%>" /><br>
            CPF:<input type="text" name="cpf" value="<%=us.getCpf()%>" /><br>
            
            <input type="hidden" name="ACAO" value="ALTERAR" />
            <input type="hidden" name="COD" value="<%=us.getCod_usuario()%>" />
            
            <input type="submit" value="Alterar" />
        </form>
        
         <%} else out.print("Dados incorretos.");%>
        
       
        
    </body>
</html>
