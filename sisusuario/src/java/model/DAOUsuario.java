/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package model;

/**
 *
 * @author ferrasa
 */
import util.*;
import java.util.*;
import java.sql.*;


public class DAOUsuario 
{
    private Banco b;
    
    public DAOUsuario()
    {
        b = new Banco();
    }
    
    public int inserir(Usuario u)
    {
        int r=0;
        
        String data = "";
        if (u.getCadastro() != null)
            data = Tools.formatInsertDataHora(u.getCadastro());
        
        r = b.inserir("INSERT INTO usuario(nome, cpf, cadastro) VALUES ('"+u.getNome()+"', '"+u.getCpf()+"', '"+data+"')");
        
        return r;
    }
    
    public boolean alterar(Usuario u)
    {
        int r=0;
        
        String data = "";
        if (u.getCadastro() != null)
            data = Tools.formatInsertDataHora(u.getCadastro());
        
        r = b.atualizar("UPDATE usuario SET nome='"+u.getNome()+"', cpf='"+u.getCpf()+"'  WHERE cod_usuario = "+u.getCod_usuario());
        
        
        if (r <= 0)
            return false;
        
        return true;
    }

	public boolean excluir(int id)
	{
		int r=0;
		r = b.excluir("DELETE FROM usuario WHERE cod_usuario = "+id);
		
		if (r <= 0)
			return false;
		
		return true;
		
	}
	
    public ArrayList<Usuario> pesquisar(String sql)
	{
		ArrayList<Usuario> vet = new ArrayList<Usuario>();
		
		ResultSet r = b.pesquisar(sql);
                try 
                {
                    while(r.next())
                    {
                        Usuario u = new Usuario();
                        u.setCod_usuario(r.getInt("cod_usuario"));
                        u.setNome(r.getString("nome"));
                        u.setCpf(r.getString("cpf"));
                        u.setCadastro(r.getDate("cadastro"));

                        vet.add(u);

                    }
                } 
                catch (SQLException ex) {
                    System.err.println("Erro pesquisa: "+ex);
                }
		return vet;
	}
    
        public Usuario getById(String id)
	{
		
		ResultSet r = b.pesquisar("SELECT * from usuario WHERE cod_usuario = "+id);
                try 
                {
                    if (r.next())
                    {
                        Usuario u = new Usuario();
                       
                        u.setCod_usuario(r.getInt("cod_usuario"));
                        u.setNome(r.getString("nome"));
                        u.setCpf(r.getString("cpf"));
                        u.setCadastro(r.getDate("cadastro"));

                        return u;

                    }
                } 
                catch (SQLException ex) {
                    System.err.println("Erro pesquisa: "+ex);
                }
		return null;
	}
	
	public void fechar()
	{
		b.fechar();
	}
}
