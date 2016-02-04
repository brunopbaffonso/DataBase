<%-- 
    Document   : listarUsuario
    Created on : 11/11/2013, 08:42:29
    Author     : ferrasa
--%>

<%@page contentType="text/html" pageEncoding="UTF-8" import="model.*"%>
<%@page import="java.util.ArrayList" %>

<jsp:useBean class="model.DAOUsuario" id="du" scope="page"></jsp:useBean>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Listagem de Usuarios</title>
    </head>
    <body>
        <h2>Listagem</h2>
        
        <table border="1">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>DATACAD</th>
                </tr>
            </thead>
            <tbody>
                

        <%
            ArrayList<Usuario> au = du.pesquisar("SELECT * FROM usuario");
            
            for (Usuario u : au)
            {
          
            
        %>
                <tr>
                    <td><a href="/sisusuario/SvUsuario?ACAO=EXCLUIR&id=<%=u.getCod_usuario()%>">Excluir</a></td>
                    <td><a href="alterarUsuario.jsp?id=<%=u.getCod_usuario()%>">Alterar</a></td>
                    <td><%=u.getNome()%></td>
                    <td><%=u.getCpf()%></td>
                    <td><%=u.getCadastro()%></td>
                </tr>
        <%}%>
            </tbody>
        </table>
        
    </body>
</html>
