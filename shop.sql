SELECT sp.SP_TEN ,sp.SP_ANH, lsp.LH_TEN, nsx.NSX_TEN
FROM san_pham_sp AS sp
     INNER JOIN loai_san_pham as lsp ON  lsp.LH_MA = sp.LH_MA 
     INNER JOIN nha_san_xuat as nsx ON nsx.NSX_MA = sp.NSX_MA 


     