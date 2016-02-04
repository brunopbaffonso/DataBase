/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package control;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import model.*;
import java.util.*;
/**
 *
 * @author ferrasa
 */
public class SvUsuario extends HttpServlet {

    private DAOUsuario du;
    
    @Override
    public void init()
    {
        du = new DAOUsuario();
    }
    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        
        String ACAO,snome,scpf;
        
        ACAO = request.getParameter("ACAO");
        
        if (ACAO.equalsIgnoreCase("INSERIR"))
        {
            Usuario u = new Usuario();
            
            snome = request.getParameter("nome");
            scpf = request.getParameter("cpf");

            u.setNome(snome);
            u.setCpf(scpf);
            u.setCadastro(new Date());
            
            int id = du.inserir(u);
            
            response.sendRedirect("cadUsuario.jsp?ins="+id);
            
            
            //out.print("INSERIDO ID: "+id);
        } else
        if (ACAO.equalsIgnoreCase("EXCLUIR"))
        {
            String id = request.getParameter("id");
            
            boolean r = du.excluir(Integer.parseInt(id));
            
            if (r)
              response.sendRedirect("listarUsuario.jsp");
            
            
        }
        else
        if (ACAO.equalsIgnoreCase("ALTERAR"))
        {
            Usuario u = new Usuario();
            
            snome = request.getParameter("nome");
            scpf = request.getParameter("cpf");
            String cod = request.getParameter("COD");
            
            u.setCod_usuario(Integer.parseInt(cod));
            u.setNome(snome);
            u.setCpf(scpf);
            
            
            du.alterar(u);
            
            response.sendRedirect("listarUsuario.jsp");
            
            
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
