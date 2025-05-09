PGDMP     9                    z           TSW    14.2    14.2 C    *           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            +           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ,           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            -           1262    17196    TSW    DATABASE     a   CREATE DATABASE "TSW" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Italian_Italy.1252';
    DROP DATABASE "TSW";
                postgres    false            �            1259    17197    account    TABLE     �   CREATE TABLE public.account (
    id integer NOT NULL,
    nome character varying(50),
    cognome character varying(50),
    username character varying(25),
    email character varying(50),
    password character varying
);
    DROP TABLE public.account;
       public         heap    postgres    false            .           0    0    TABLE account    ACL     *   GRANT ALL ON TABLE public.account TO www;
          public          postgres    false    209            �            1259    17202    account_id_seq    SEQUENCE     �   CREATE SEQUENCE public.account_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.account_id_seq;
       public          postgres    false    209            /           0    0    account_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.account_id_seq OWNED BY public.account.id;
          public          postgres    false    210            0           0    0    SEQUENCE account_id_seq    ACL     4   GRANT ALL ON SEQUENCE public.account_id_seq TO www;
          public          postgres    false    210            �            1259    17203    cristovelato    TABLE     �   CREATE TABLE public.cristovelato (
    id integer NOT NULL,
    commento character varying,
    data character varying(10),
    utente character varying(25),
    stelle character varying(1)
);
     DROP TABLE public.cristovelato;
       public         heap    postgres    false            1           0    0    TABLE cristovelato    ACL     /   GRANT ALL ON TABLE public.cristovelato TO www;
          public          postgres    false    211            �            1259    17208    cristovelato_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cristovelato_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.cristovelato_id_seq;
       public          postgres    false    211            2           0    0    cristovelato_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.cristovelato_id_seq OWNED BY public.cristovelato.id;
          public          postgres    false    212            3           0    0    SEQUENCE cristovelato_id_seq    ACL     9   GRANT ALL ON SEQUENCE public.cristovelato_id_seq TO www;
          public          postgres    false    212            �            1259    17209    musarcheologico    TABLE     �   CREATE TABLE public.musarcheologico (
    id integer NOT NULL,
    commento character varying,
    data character varying(10),
    utente character varying(25),
    stelle character varying(1)
);
 #   DROP TABLE public.musarcheologico;
       public         heap    postgres    false            4           0    0    TABLE musarcheologico    ACL     2   GRANT ALL ON TABLE public.musarcheologico TO www;
          public          postgres    false    213            �            1259    17214    musarcheologico_id_seq    SEQUENCE     �   CREATE SEQUENCE public.musarcheologico_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.musarcheologico_id_seq;
       public          postgres    false    213            5           0    0    musarcheologico_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.musarcheologico_id_seq OWNED BY public.musarcheologico.id;
          public          postgres    false    214            6           0    0    SEQUENCE musarcheologico_id_seq    ACL     <   GRANT ALL ON SEQUENCE public.musarcheologico_id_seq TO www;
          public          postgres    false    214            �            1259    17215 
   napolisott    TABLE     �   CREATE TABLE public.napolisott (
    id integer NOT NULL,
    commento character varying,
    data character varying(10),
    utente character varying(25),
    stelle character varying(1)
);
    DROP TABLE public.napolisott;
       public         heap    postgres    false            7           0    0    TABLE napolisott    ACL     -   GRANT ALL ON TABLE public.napolisott TO www;
          public          postgres    false    215            �            1259    17220    napolisott_id_seq    SEQUENCE     �   CREATE SEQUENCE public.napolisott_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.napolisott_id_seq;
       public          postgres    false    215            8           0    0    napolisott_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.napolisott_id_seq OWNED BY public.napolisott.id;
          public          postgres    false    216            9           0    0    SEQUENCE napolisott_id_seq    ACL     7   GRANT ALL ON SEQUENCE public.napolisott_id_seq TO www;
          public          postgres    false    216            �            1259    17221    palazzo    TABLE     �   CREATE TABLE public.palazzo (
    id integer NOT NULL,
    commento character varying,
    data character varying(10),
    utente character varying(25),
    stelle character varying(1)
);
    DROP TABLE public.palazzo;
       public         heap    postgres    false            :           0    0    TABLE palazzo    ACL     *   GRANT ALL ON TABLE public.palazzo TO www;
          public          postgres    false    217            �            1259    17226    palazzo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.palazzo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.palazzo_id_seq;
       public          postgres    false    217            ;           0    0    palazzo_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.palazzo_id_seq OWNED BY public.palazzo.id;
          public          postgres    false    218            <           0    0    SEQUENCE palazzo_id_seq    ACL     4   GRANT ALL ON SEQUENCE public.palazzo_id_seq TO www;
          public          postgres    false    218            �            1259    17227 
   sangennaro    TABLE     �   CREATE TABLE public.sangennaro (
    id integer NOT NULL,
    commento character varying,
    data character varying(10),
    utente character varying(25),
    stelle character varying(1)
);
    DROP TABLE public.sangennaro;
       public         heap    postgres    false            =           0    0    TABLE sangennaro    ACL     -   GRANT ALL ON TABLE public.sangennaro TO www;
          public          postgres    false    219            �            1259    17232    sangennaro_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sangennaro_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.sangennaro_id_seq;
       public          postgres    false    219            >           0    0    sangennaro_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.sangennaro_id_seq OWNED BY public.sangennaro.id;
          public          postgres    false    220            ?           0    0    SEQUENCE sangennaro_id_seq    ACL     7   GRANT ALL ON SEQUENCE public.sangennaro_id_seq TO www;
          public          postgres    false    220            �            1259    17233    santachiara    TABLE     �   CREATE TABLE public.santachiara (
    id integer NOT NULL,
    commento character varying,
    data character varying(10),
    utente character varying(25),
    stelle character varying(1)
);
    DROP TABLE public.santachiara;
       public         heap    postgres    false            @           0    0    TABLE santachiara    ACL     .   GRANT ALL ON TABLE public.santachiara TO www;
          public          postgres    false    221            �            1259    17238    santachiara_id_seq    SEQUENCE     �   CREATE SEQUENCE public.santachiara_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.santachiara_id_seq;
       public          postgres    false    221            A           0    0    santachiara_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.santachiara_id_seq OWNED BY public.santachiara.id;
          public          postgres    false    222            B           0    0    SEQUENCE santachiara_id_seq    ACL     8   GRANT ALL ON SEQUENCE public.santachiara_id_seq TO www;
          public          postgres    false    222            z           2604    17239 
   account id    DEFAULT     h   ALTER TABLE ONLY public.account ALTER COLUMN id SET DEFAULT nextval('public.account_id_seq'::regclass);
 9   ALTER TABLE public.account ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    209            {           2604    17240    cristovelato id    DEFAULT     r   ALTER TABLE ONLY public.cristovelato ALTER COLUMN id SET DEFAULT nextval('public.cristovelato_id_seq'::regclass);
 >   ALTER TABLE public.cristovelato ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    212    211            |           2604    17241    musarcheologico id    DEFAULT     x   ALTER TABLE ONLY public.musarcheologico ALTER COLUMN id SET DEFAULT nextval('public.musarcheologico_id_seq'::regclass);
 A   ALTER TABLE public.musarcheologico ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    214    213            }           2604    17242    napolisott id    DEFAULT     n   ALTER TABLE ONLY public.napolisott ALTER COLUMN id SET DEFAULT nextval('public.napolisott_id_seq'::regclass);
 <   ALTER TABLE public.napolisott ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    215            ~           2604    17243 
   palazzo id    DEFAULT     h   ALTER TABLE ONLY public.palazzo ALTER COLUMN id SET DEFAULT nextval('public.palazzo_id_seq'::regclass);
 9   ALTER TABLE public.palazzo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    217                       2604    17244    sangennaro id    DEFAULT     n   ALTER TABLE ONLY public.sangennaro ALTER COLUMN id SET DEFAULT nextval('public.sangennaro_id_seq'::regclass);
 <   ALTER TABLE public.sangennaro ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    219            �           2604    17245    santachiara id    DEFAULT     p   ALTER TABLE ONLY public.santachiara ALTER COLUMN id SET DEFAULT nextval('public.santachiara_id_seq'::regclass);
 =   ALTER TABLE public.santachiara ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    221                      0    17197    account 
   TABLE DATA           O   COPY public.account (id, nome, cognome, username, email, password) FROM stdin;
    public          postgres    false    209   �C                 0    17203    cristovelato 
   TABLE DATA           J   COPY public.cristovelato (id, commento, data, utente, stelle) FROM stdin;
    public          postgres    false    211   BE                 0    17209    musarcheologico 
   TABLE DATA           M   COPY public.musarcheologico (id, commento, data, utente, stelle) FROM stdin;
    public          postgres    false    213   bG                  0    17215 
   napolisott 
   TABLE DATA           H   COPY public.napolisott (id, commento, data, utente, stelle) FROM stdin;
    public          postgres    false    215   �J       "          0    17221    palazzo 
   TABLE DATA           E   COPY public.palazzo (id, commento, data, utente, stelle) FROM stdin;
    public          postgres    false    217   O       $          0    17227 
   sangennaro 
   TABLE DATA           H   COPY public.sangennaro (id, commento, data, utente, stelle) FROM stdin;
    public          postgres    false    219   �S       &          0    17233    santachiara 
   TABLE DATA           I   COPY public.santachiara (id, commento, data, utente, stelle) FROM stdin;
    public          postgres    false    221   �V       C           0    0    account_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.account_id_seq', 4, true);
          public          postgres    false    210            D           0    0    cristovelato_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.cristovelato_id_seq', 4, true);
          public          postgres    false    212            E           0    0    musarcheologico_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.musarcheologico_id_seq', 4, true);
          public          postgres    false    214            F           0    0    napolisott_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.napolisott_id_seq', 4, true);
          public          postgres    false    216            G           0    0    palazzo_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.palazzo_id_seq', 4, true);
          public          postgres    false    218            H           0    0    sangennaro_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.sangennaro_id_seq', 4, true);
          public          postgres    false    220            I           0    0    santachiara_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.santachiara_id_seq', 4, true);
          public          postgres    false    222            �           2606    17247    account account_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.account
    ADD CONSTRAINT account_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.account DROP CONSTRAINT account_pkey;
       public            postgres    false    209            �           2606    17249    cristovelato cristovelato_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.cristovelato
    ADD CONSTRAINT cristovelato_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.cristovelato DROP CONSTRAINT cristovelato_pkey;
       public            postgres    false    211            �           2606    17251 $   musarcheologico musarcheologico_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.musarcheologico
    ADD CONSTRAINT musarcheologico_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.musarcheologico DROP CONSTRAINT musarcheologico_pkey;
       public            postgres    false    213            �           2606    17253    napolisott napolisott_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.napolisott
    ADD CONSTRAINT napolisott_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.napolisott DROP CONSTRAINT napolisott_pkey;
       public            postgres    false    215            �           2606    17255    palazzo palazzo_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.palazzo
    ADD CONSTRAINT palazzo_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.palazzo DROP CONSTRAINT palazzo_pkey;
       public            postgres    false    217            �           2606    17257    sangennaro sangennaro_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.sangennaro
    ADD CONSTRAINT sangennaro_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.sangennaro DROP CONSTRAINT sangennaro_pkey;
       public            postgres    false    219            �           2606    17259    santachiara santachiara_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.santachiara
    ADD CONSTRAINT santachiara_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.santachiara DROP CONSTRAINT santachiara_pkey;
       public            postgres    false    221               P  x�u�;s�@F��W��^���$FDPtҬ�\u�dY@��C�8VV�~�9sF��dU�ʔ���q�0@� �AY�T�N��cX��Bs0���H4׍_���ꤻ�6�[�U������F�:�h3W������mM9��� ����S@��)&����vi�s�h1o���,/7bs�rd����C�{�n;��0?��3A������(�֔P�?@�?$�ϵ�2T�+{M��͔#��&����N�;�`nc=��X|����mMP�sNY_8ŨL���A��&E}�	%w�a��&s��Zu���U��>�ӵ�>+�x�ˎ�`�f�'�P��� �&l�           x�m�1r1E��)Щ�ȎbO�4�q�']�ɘ���BU���
�}��$��[w$w����wL�f-L#�-ϳ��=�,����/ʅ�CML�gq�t��4��l�hϩp.xC�"ݺ�b�H���kZ�Z���GM�ʴC39��d��Z���
�5�6<%K��Ԟ��Q4�Yo��˫����v;p��9�n��j;��D��r֝F�~$WĔ�i�".2�G#���tC���@�u�4v�=�
	s�����c�v8�8��Wi�
�9��:���M�!��4R�C�=�7H5���Qe�w��}��K-d|ɲ�[K��&���P��Zh�����{���'�Q�?��KO�Ɩ�z�b����\^�n;F��%{J\�w�����O 6	e�=�uf�	��/VhRz��&���ȼ�%o�'(akر���@y_-�gn�Ei��	E0w)�䱦fՋ��,}��F{c��u���i$</��6�^���c+Gt�N��8uD����C�����Y�V��V�         �  x�]U;nI��S�"&�X�el,�l����z�M�=�q�]��0�	|��
�ؾ�֒��3ӟz�*�^�-E*\�$NՓ')5�Z��$�Z�YKU*�w��v�$N�}���9�����>W�R�(ؓe�:��h��U��	,:�*�	�'���s:�'��~�L�?H�$r��Ԁ�Ӕ������Ol�`i��G�q��4�~�����O'���'%�
Ķ�Bb�)��k2������x;�%O��I4T;�mECWdj�G�$q�GPX�@�G��j�ǫ����W��

��i̺z�ޮ�$�5]m�;(�pW�
*A{Q'�>�{A;M ���(�1��gqln���Q�%J�1v��V�.@̐E9�N���Kw�V\*�z�\������6~�Le_p��=�S���=�"��/�ݓ/�x.L
]]�߬> ��օ���"�5�K��k������$�Q\"\�FI3���Ȁ�$�H�	ԁ�Ȩ�o͗�A�z�{zO��v��>��O|1�5\�28�	�{8�8�4�ߧlݳ�܊چ������q�i4�/��[��Q����A�h͜��p��c����h��%�gu2�aǠvyf���a`U����'����Y�|��#�\cj�f˵E54�Բ�ڗ2�s���2/1,��Qq�,���;r��L�޷3'�7O��n�z��"]�sd���W,�[O�EM��^_�d����u��MM��ב�E?'Kd��H+X߷-m����,��i�����ia��Rft�o��=Ҝ|~���� �}c"0���o�,R<������fa'�zw#��󠃢P���'ɿ�k#���p`�5L|6�@���OV�ixItD�[*F�� {ԵV�O�n��T1�PLWo�����?/xI�          �  x�uU=�#E��_�d�o��	���VH�� 8tIy�<[RO��8ڿ�!�d��'�KxU�w����W�z����2qNG
=�e�"�@�F	Ek�)1�ӟx�I�Rd����AZ8s�T���_�Hm��q�YC������Rt>����QC��)�W�4����q3����T
e2$R�tt��y`ow�9�&m���rȭVB��$����'�J@?4�,��#�0�~ϡ�0q�0QB?�(�**I@M2�W���:I2@\)�7@-(�	��^E��qf�i'l�	r'�y��:� �Al�{�ѐJO�p��̽�%B��纽����F�8��p{F������7�m��RO��'�`ZQP��|�]��~s����f�[�)tJ}���z��1�>��n��g�#�V�>�b^Y��x|�2����:��\�ԌF�̹p�I��uRf��$�aol<hRucU'���b�t����d��:B������!���RE�g��3�2Wmy��FU[B�h��[��$�Nz<R����Y�McH���]�D��Y]��gw��[s$���M��`F�X������F����5qEl�r�V"�ȸxVg�����7穫in����{��bG��F8XW��oW��l�&'�Ц���DՑB����� f����� f<vp�l� ��1e=�ft?��� :SB�|(���@2+��L��Q��܂`�PS���HR��I�E�����T���$�b�$��b�'�Hć1@��������*��Ķ?uI�3fZ��4�L���$��o�����x��J��G�m.�E���88��Q�"��#VP� 쭍~u�?iN�;:��a��!�����d|�ޮoW1�2$_?0���h�Ѩ�� ܐYU��b� �y>�O�l� |w��Q�#�l�;�8��l����`4i!W�ݍ�a8-�w#�=�SN��T�!���,ҵ�/�,	f_�޶NzE͌�BDXd��]���'��      "   �  x�mV�nE>���n�%kc;A�#�� �$p�R;S;[ROפ��G�$G"q@y�Mx��ٱ�	>����~��]��Ѡ��ה�8w�$)B�)K�����$��?��C?�8��`�����R���$þ:I�mM?
��x��\s��Z4�H5RI:�^�z�=]�S�/-�5���'�';�E����^��F��7�rP����$��$�k�a�R��l8Ŋ�ʨ�d#!h�:�4YB_E�\��o㔤7�Ckso��wU�#U��'y�N=�Uh��F��D�ᕢRg�4�PD�*���3���,Wk�:g��(m!�^�N�^�}��拧w7ww+�3�>�����
�:i�Z���̓s��.����N�*�0@�^�����(�'��R����ط[�:_�z/��J�E|3
�h�&o�墥�q�g�F�շ�CO����؄�[a�AsI�j�!I���
ϼ�)�Q���~b/	0�mZkrq&<�W8-8^X+Z�Kj|x�#�fkbm�Q��b�,�ABn8�)k��)b!t�1%���ΐ�k6r�l�����e�[� <�v1j��0�x��Q���K;�������l�Cp�5l0�d�$p��7��x{CR�]�FS�Oѷ쵗Q}η���(��#����� }D�~�@�Z įpy ډEg���� E�	4����6&,�C>��,.����j�l�hw� Y[[�9-Ñ^p
Hǁ�Ko6�G/<�����*�~-�H���KnyT��	7�{�^�tz$���YH=h�|�ux�Q���фp�?��E���e�mM�7ƢO�!5yT�K����> ���i\�!�b�����f}s�*���h��	�	Ĉ;C_��� OF,�y}��W�)u=.~��k��:M.gV�O���m2u2Ly��[ȼ���*������A3�����߀��>��pG�7[,�gF����s2��u�Q�����S�Av4�`��g���3����������A��6$�}��7O.�5�yN ���K������k����"-�v��U����@6MX�i�٦�ȣ�֊)b��Q� `�k���kw"\��K���l�ᓜ�
�R���n�|��:��~�
�_$Px`�:r�
ʹ	�`��-*
Cb��y�]���4@���=j&��<m�a�El�8���Ɩg�(ʲ�|�s�Z�nnG�ry�����o����Vid�      $   �  x�]�Mn$E��է� ����x��� ~$��@�b]])3�ȟ^x�5رd�|N���ͪU]���}�^O?K.�8E�h�TOB[�����-��t�5��*Y���7��d[U�F�dB��ta�-T��h?LQ�f	��B���ڞ~(/b��l~Z
���8W�(��^GWvDt� :{s\�Ib:k��9�!L�_O�jӪgÑ�h��wt�$�j�,����f;�K��U
�bg��2[�Y���]{����C��4�V$A��D}��m���H�*AN����VkgwX<���������W7o_n�	VK�d����{���ě�/�(M�f^�3�k�u0�����y��	߱��])͟>���8��w�`˾ Yp����1�Q��75�
�������d�`�*��)�1�О~|&����qw�t7UŸHc��z����j�=	ID_���/d�]�{M����y���i	0^ ���L��7Ӈ!�k��;�����˦���+P�m�\;��ֺ��Yk}��cm�7���$�x��17�W�ӝd>��Y靇�!�q����=����D����
���^�;I^4!@��v�q��ޜ��>nа9����,_9�R���`�/b�>ݫO�p8Y���j/�՞��[�������O  �*ܿ �=c�G���1��Q;XN������ k�zV�-kc�z?7!�j��'�	�w櫫+�
�^ ��:U��3f96������v�<��K      &   :  x�eTK�A]wNa� R b=�BH����T]�O/�D,��:�L`1#u��~~��n��hѬ��Q`�x�����K����)�������1}�ق��9s�߆?�i�D=g#Hr?b���|j��쨥5
���ZTN�lƭE���p}L<M�PW��������8&4�(z������g�S��ƠLBY�9h/���9��b��"/��=�$����7�޷as�~riŤ�$�ՠ~��UV:�t�4�3��'��A�����o޿޿��;4i$&��o���� ���_R00���M,o҈c��VtP�܎��f+�	�Ė1D�g��|��/ 2z��2����rQ:C����(D|<�L�9����(���������
i� ��fG?�Y�c_ᅸ�D��f��[�ns�}K:���𝅊���nh/���n��*���3�f�;�޺3��^�e0��J��p�4����"G
�J��]��>����2����a>k�f�$Aa��p]<���Ѯmi�Y�}������m8�G�L�B�.H�P�G�1إ�S�����NP�a`7���74.C��p���A`�X��b.�S�r~%�Q|`����]�9�B��,V�E�'����n�ܫK��D/A��O7�k���H|h�Fѧ�:x��'�Z�B�I�A���ww�7A"N��B�$q�z���w7�����?������ �c��������>t��0p�QQ��>ȵ����O��`}�.�}zq�7�̳���
<�V��Y���\��b.X��c�s��l��->I     